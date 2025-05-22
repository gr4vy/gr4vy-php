<?php

declare(strict_types=1);

use Gr4vy\Auth;
use Gr4vy\JWTScope;
use PHPUnit\Framework\TestCase;

final class AuthTest extends TestCase
{
    private string $privateKey = <<<'EOD'
-----BEGIN PRIVATE KEY-----
MIHuAgEAMBAGByqGSM49AgEGBSuBBAAjBIHWMIHTAgEBBEIBABM9jQu+HT87oIik
O6DiJjYeghr3V+VMBVNU2hCM3X/OAS6TUTylMbnjDnwWdmu7anVSnjvEY1a4KxQ9
WZ8E/PKhgYkDgYYABABRdv5VAtOsGb6THxeK/p7RAARPm6Zwb7FF4sZAYkkSB7h0
2jpj3UHSpyl92BQkiF/xakz7hMMD1A0ZTn5SuXWp3AG9qPHO3eB9WrZhPGYixwyo
XNjhnPEDhmkItKXteke9iBOTOOXB7AFQSh7EXRBmhBs4u3ZlTmrl+8VdBc3+jwAY
rw==
-----END PRIVATE KEY-----
EOD;

    private array $embedParams = [
        'amount' => 9000,
        'currency' => 'USD',
        'buyer_external_identifier' => 'user-123',
        'connection_options' => [
            'stripe-card' => [
                'stripe_connect' => [
                    'key' => 'value',
                ],
            ],
        ],
        'metadata' => [
            'camelCaseKey' => 'value1',
            'snake_case_key' => 'value2',
        ],
        'cart_items' => [
            [
                'name' => 'Joust Duffle Bag',
                'quantity' => 1,
                'unit_amount' => 9000,
                'tax_amount' => 0,
                'categories' => ['Gear', 'Bags', 'Test'],
            ],
        ],
    ];

    private string $checkoutSessionId = '0ebde6a1-f66c-43ea-bb8b-73751864c604';

    public function test_get_token_creates_valid_jwt(): void
    {
        $token = Auth::getToken(
            privateKey: $this->privateKey,
            scopes: [JWTScope::READ_ALL, JWTScope::WRITE_ALL],
            expiresIn: '+1 minute'
        );

        $decoded = $this->decodeJwt($token);

        $this->assertEquals('ES512', $decoded['header']['alg']);
        $this->assertEquals('JWT', $decoded['header']['typ']);
        $this->assertArrayHasKey('kid', $decoded['header']);
        $this->assertEquals(['*.read', '*.write'], $decoded['payload']['scopes']);
        $this->assertIsInt($decoded['payload']['iat']);
        $this->assertIsInt($decoded['payload']['nbf']);
        $this->assertIsInt($decoded['payload']['exp']);
        $this->assertStringContainsString('gr4vy/gr4vy-php', $decoded['payload']['iss']);
    }

    public function test_get_token_accepts_optional_embed_data(): void
    {
        $token = Auth::getToken(
            $this->privateKey,
            [JWTScope::EMBED],
            '+1 minute',
            null,
            $this->embedParams
        );

        $decoded = $this->decodeJwt($token);

        $this->assertEquals(['embed'], $decoded['payload']['scopes']);
        $this->assertArrayHasKey('embed', $decoded['payload']);
        $this->assertEquals($this->embedParams, $decoded['payload']['embed']);
    }

    public function test_get_token_ignores_embed_data_if_scope_not_set(): void
    {
        $token = Auth::getToken(
            $this->privateKey,
            [JWTScope::READ_ALL],
            '+1 minute',
            null,
            $this->embedParams
        );

        $decoded = $this->decodeJwt($token);

        $this->assertEquals(['*.read'], $decoded['payload']['scopes']);
        $this->assertArrayNotHasKey('embed', $decoded['payload']);
    }

    public function test_get_embed_token_creates_jwt_for_embed(): void
    {
        $token = Auth::getEmbedToken(
            $this->privateKey,
            '+1 hour',
            null,
            $this->embedParams
        );

        $decoded = $this->decodeJwt($token);

        $this->assertEquals(['embed'], $decoded['payload']['scopes']);
        $this->assertArrayHasKey('embed', $decoded['payload']);
        $this->assertEquals($this->embedParams, $decoded['payload']['embed']);
    }

    public function test_get_embed_token_accepts_checkout_session_id(): void
    {
        $token = Auth::getEmbedToken(
            $this->privateKey,
            '+1 hour',
            $this->checkoutSessionId,
            $this->embedParams
        );

        $decoded = $this->decodeJwt($token);

        $this->assertEquals($this->checkoutSessionId, $decoded['payload']['checkout_session_id']);
    }

    public function test_update_token_resigns_with_new_expiration(): void
    {
        $originalToken = Auth::getToken($this->privateKey, [JWTScope::READ_ALL], '+1 minute');
        sleep(2); // Ensure iat/exp/nbf will differ
        $newToken = Auth::updateToken($this->privateKey, $originalToken, null, '+1 minute');

        $originalDecoded = $this->decodeJwt($originalToken);
        $newDecoded = $this->decodeJwt($newToken);

        $this->assertEquals($originalDecoded['header'], $newDecoded['header']);
        $this->assertEquals($originalDecoded['payload']['scopes'], $newDecoded['payload']['scopes']);
        $this->assertGreaterThan($originalDecoded['payload']['iat'], $newDecoded['payload']['iat']);
        $this->assertGreaterThan($originalDecoded['payload']['exp'], $newDecoded['payload']['exp']);
        $this->assertGreaterThan($originalDecoded['payload']['nbf'], $newDecoded['payload']['nbf']);
    }

    public function test_update_token_allows_embed_params_update(): void
    {
        $originalToken = Auth::getEmbedToken(
            $this->privateKey,
            '+1 minute',
            $this->checkoutSessionId,
            $this->embedParams
        );

        $newEmbedParams = [
            'amount' => 1299,
            'currency' => 'USD',
        ];

        $newToken = Auth::updateToken(
            $this->privateKey,
            $originalToken,
            null,
            '+1 minute',
            $this->checkoutSessionId,
            $newEmbedParams
        );

        $newDecoded = $this->decodeJwt($newToken);

        $this->assertEquals($newEmbedParams, $newDecoded['payload']['embed']);
        $this->assertEquals($this->checkoutSessionId, $newDecoded['payload']['checkout_session_id']);
    }

    /**
     * Helper to decode a JWT without verifying signature.
     */
    private function decodeJwt(string $jwt): array
    {
        [$header, $payload, $signature] = explode('.', $jwt);
        $header = json_decode(base64_decode(strtr($header, '-_', '+/')), true);
        $payload = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

        return [
            'header' => $header,
            'payload' => $payload,
            'signature' => $signature,
        ];
    }
}