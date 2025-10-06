<?php

declare(strict_types=1);

namespace Gr4vy;

use DateTimeImmutable;
use InvalidArgumentException;
use Lcobucci\JWT\ClaimsFormatter;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Signer;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Token\Parser;
use Lcobucci\JWT\Token\RegisteredClaims;
use Ramsey\Uuid\Uuid;

class UnixTimestampDateConversion implements ClaimsFormatter
{
    public function formatClaims(array $claims): array
    {
        foreach (RegisteredClaims::DATE_CLAIMS as $claim) {
            if (! array_key_exists($claim, $claims)) {
                continue;
            }
            $claims[$claim] = $this->convertDate($claims[$claim]);
        }

        return $claims;
    }

    private function convertDate(DateTimeImmutable $date): int
    {
        return $date->getTimestamp();
    }
}

/**
 * Class JWTScope
 *
 * Defines constants for all supported JWT scopes in the Gr4vy API.
 */
class JWTScope
{
    const READ_ALL = '*.read';
    const WRITE_ALL = '*.write';
    const EMBED = 'embed';
    const ANTI_FRAUD_SERVICE_DEFINITIONS_READ = 'anti-fraud-service-definitions.read';
    const ANTI_FRAUD_SERVICE_DEFINITIONS_WRITE = 'anti-fraud-service-definitions.write';
    const ANTI_FRAUD_SERVICES_READ = 'anti-fraud-services.read';
    const ANTI_FRAUD_SERVICES_WRITE = 'anti-fraud-services.write';
    const API_LOGS_READ = 'api-logs.read';
    const API_LOGS_WRITE = 'api-logs.write';
    const APPLE_PAY_CERTIFICATES_READ = 'apple-pay-certificates.read';
    const APPLE_PAY_CERTIFICATES_WRITE = 'apple-pay-certificates.write';
    const AUDIT_LOGS_READ = 'audit-logs.read';
    const AUDIT_LOGS_WRITE = 'audit-logs.write';
    const BUYERS_READ = 'buyers.read';
    const BUYERS_WRITE = 'buyers.write';
    const BUYERS_BILLING_DETAILS_READ = 'buyers.billing-details.read';
    const BUYERS_BILLING_DETAILS_WRITE = 'buyers.billing-details.write';
    const CARD_SCHEME_DEFINITIONS_READ = 'card-scheme-definitions.read';
    const CARD_SCHEME_DEFINITIONS_WRITE = 'card-scheme-definitions.write';
    const CHECKOUT_SESSIONS_READ = 'checkout-sessions.read';
    const CHECKOUT_SESSIONS_WRITE = 'checkout-sessions.write';
    const CONNECTIONS_READ = 'connections.read';
    const CONNECTIONS_WRITE = 'connections.write';
    const DIGITAL_WALLETS_READ = 'digital-wallets.read';
    const DIGITAL_WALLETS_WRITE = 'digital-wallets.write';
    const FLOWS_READ = 'flows.read';
    const FLOWS_WRITE = 'flows.write';
    const GIFT_CARD_SERVICE_DEFINITIONS_READ = 'gift-card-service-definitions.read';
    const GIFT_CARD_SERVICE_DEFINITIONS_WRITE = 'gift-card-service-definitions.write';
    const GIFT_CARD_SERVICES_READ = 'gift-card-services.read';
    const GIFT_CARD_SERVICES_WRITE = 'gift-card-services.write';
    const GIFT_CARDS_READ = 'gift-cards.read';
    const GIFT_CARDS_WRITE = 'gift-cards.write';
    const MERCHANT_ACCOUNTS_READ = 'merchant-accounts.read';
    const MERCHANT_ACCOUNTS_WRITE = 'merchant-accounts.write';
    const PAYMENT_LINKS_READ = 'payment-links.read';
    const PAYMENT_LINKS_WRITE = 'payment-links.write';
    const PAYMENT_METHOD_DEFINITIONS_READ = 'payment-method-definitions.read';
    const PAYMENT_METHOD_DEFINITIONS_WRITE = 'payment-method-definitions.write';
    const PAYMENT_METHODS_READ = 'payment-methods.read';
    const PAYMENT_METHODS_WRITE = 'payment-methods.write';
    const PAYMENT_OPTIONS_READ = 'payment-options.read';
    const PAYMENT_OPTIONS_WRITE = 'payment-options.write';
    const PAYMENT_SERVICE_DEFINITIONS_READ = 'payment-service-definitions.read';
    const PAYMENT_SERVICE_DEFINITIONS_WRITE = 'payment-service-definitions.write';
    const PAYMENT_SERVICES_READ = 'payment-services.read';
    const PAYMENT_SERVICES_WRITE = 'payment-services.write';
    const PAYOUTS_READ = 'payouts.read';
    const PAYOUTS_WRITE = 'payouts.write';
    const REPORTS_READ = 'reports.read';
    const REPORTS_WRITE = 'reports.write';
    const ROLES_READ = 'roles.read';
    const ROLES_WRITE = 'roles.write';
    const TRANSACTIONS_READ = 'transactions.read';
    const TRANSACTIONS_WRITE = 'transactions.write';
    const USERS_ME_READ = 'users.me.read';
    const USERS_ME_WRITE = 'users.me.write';
    const VAULT_FORWARD_READ = 'vault-forward.read';
    const VAULT_FORWARD_WRITE = 'vault-forward.write';
    const VAULT_FORWARD_AUTHENTICATIONS_READ = 'vault-forward-authentications.read';
    const VAULT_FORWARD_AUTHENTICATIONS_WRITE = 'vault-forward-authentications.write';
    const VAULT_FORWARD_CONFIGS_READ = 'vault-forward-configs.read';
    const VAULT_FORWARD_CONFIGS_WRITE = 'vault-forward-configs.write';
    const VAULT_FORWARD_DEFINITIONS_READ = 'vault-forward-definitions.read';
    const VAULT_FORWARD_DEFINITIONS_WRITE = 'vault-forward-definitions.write';
    const WEBHOOK_SUBSCRIPTIONS_READ = 'webhook-subscriptions.read';
    const WEBHOOK_SUBSCRIPTIONS_WRITE = 'webhook-subscriptions.write';
}

/**
 * Class Auth
 *
 * Provides static methods for generating and updating JWT tokens for Gr4vy API authentication.
 */
class Auth
{
    /**
     * Returns a callable that generates a JWT token with the given private key and scopes.
     *
     * @param  non-empty-string  $privateKey  The private key to sign the JWT.
     * @param  list<string>  $scopes  The scopes to include in the JWT.
     * @param  string  $expiresIn  The expiration time (e.g., "+30s").
     * @return callable Returns a callable that generates a JWT token.
     */
    public static function withToken(string $privateKey, array $scopes = [JWTScope::READ_ALL, JWTScope::WRITE_ALL], string $expiresIn = '+30s'): callable
    {
        return function () use ($privateKey, $scopes, $expiresIn): mixed {
            return Auth::getToken(privateKey: $privateKey, scopes: $scopes, expiresIn: $expiresIn);
        };
    }

    /**
     * Generates a JWT token for authentication with the Gr4vy API.
     *
     * @param  non-empty-string  $privateKey  The private key to sign the JWT.
     * @param  list<string>  $scopes  The scopes to include in the JWT.
     * @param  string  $expiresIn  The expiration time (e.g., "+30s").
     * @param  string|null  $checkoutSessionId  Optional checkout session ID.
     * @param  array<string,mixed>|null  $embedParams  Optional embed parameters.
     * @return string The generated JWT token.
     */
    public static function getToken(string $privateKey, array $scopes = [JWTScope::READ_ALL, JWTScope::WRITE_ALL], string $expiresIn = '+30 seconds', ?string $checkoutSessionId = null, ?array $embedParams = null): string
    {
        $kid = self::getKeyId(privateKey: $privateKey);

        $now = new DateTimeImmutable();
        $key = InMemory::plainText(contents: $privateKey);
        $config = Configuration::forAsymmetricSigner(
            signer: new Signer\Ecdsa\Sha512(),
            signingKey: $key,
            verificationKey: InMemory::base64Encoded(contents: 'bm90dXNlZA==')
        );

        $tokenBuilder = $config->builder(claimFormatter: new UnixTimestampDateConversion())
                // Configures the issuer (iss claim)
            ->issuedBy(issuer: self::getIssuer())
                // Configures the id (jti claim)
            ->identifiedBy(id: Uuid::uuid4()->toString())
                // Configures the time that the token was issue (iat claim)
            ->issuedAt(issuedAt: $now)
                // Configures the time that the token can be used (nbf claim)
            ->canOnlyBeUsedAfter(notBefore: $now)
                // Configures the expiration time of the token (exp claim)
            ->expiresAt(expiration: $now->modify(modifier: $expiresIn))
                // Configures a new claim, called "uid"
            ->withClaim(name: 'scopes', value: $scopes)
                // // Configures a new header, called "foo"
            ->withHeader(name: 'kid', value: $kid);

        if (in_array(needle: JWTScope::EMBED, haystack: $scopes) && isset($embedParams) && count(value: $embedParams) > 0) {
            $tokenBuilder = $tokenBuilder->withClaim(name: 'embed', value: $embedParams);
        }

        if (isset($checkoutSessionId)) {
            $tokenBuilder = $tokenBuilder->withClaim(name: 'checkout_session_id', value: $checkoutSessionId);
        }

        return $tokenBuilder->getToken(signer: $config->signer(), key: $config->signingKey())->toString();
    }

    /**
     * Updates an existing JWT token with new scopes, expiration, or other claims.
     *
     * @param  non-empty-string  $privateKey  The private key to sign the JWT.
     * @param  non-empty-string  $token  The existing JWT token to update.
     * @param  list<string>|null  $scopes  Optional new scopes.
     * @param  string  $expiresIn  The expiration time (e.g., "+30s").
     * @param  string|null  $checkoutSessionId  Optional checkout session ID.
     * @param  array<string,mixed>|null  $embedParams  Optional embed parameters.
     * @return string The updated JWT token.
     */
    public static function updateToken(string $privateKey, string $token, ?array $scopes = null, string $expiresIn = '+30s', ?string $checkoutSessionId = null, ?array $embedParams = null): string
    {
        $parser = new Parser(decoder: new JoseEncoder());
        $token = $parser->parse(jwt: $token);

        /** @phpstan-ignore method.notFound */
        $scopes = $scopes ?? $token->claims()->get(name: 'scopes');
        /** @phpstan-ignore method.notFound */
        $checkoutSessionId = $checkoutSessionId ?? $token->claims()->get(name: 'checkout_session_id');
        /** @phpstan-ignore method.notFound */
        $embedParams = $embedParams ?? $token->claims()->get(name: 'embed');

        return self::getToken(privateKey: $privateKey, scopes: $scopes, expiresIn: $expiresIn, checkoutSessionId: $checkoutSessionId, embedParams: $embedParams);
    }

    /**
     * Generates a JWT token specifically for embedding purposes.
     *
     * @param  non-empty-string  $privateKey  The private key to sign the JWT.
     * @param  string  $expiresIn  The expiration time (default "+1h").
     * @param  string|null  $checkoutSessionId  Optional checkout session ID.
     * @param  array<string,mixed>|null  $embedParams  Optional embed parameters.
     * @return string The generated embed JWT token.
     */
    public static function getEmbedToken(string $privateKey, string $expiresIn = '+1 hour', ?string $checkoutSessionId = null, ?array $embedParams = null): string
    {
        $scopes = [JWTScope::EMBED];

        return self::getToken(privateKey: $privateKey, scopes: $scopes, expiresIn: $expiresIn, checkoutSessionId: $checkoutSessionId, embedParams: $embedParams);
    }

    /**
     * Calculates the key ID (kid) for a given private key.
     *
     * @param  non-empty-string  $privateKey  The private key.
     * @return string The calculated key ID.
     */
    public static function getKeyId(string $privateKey): string
    {
        $privateKey = openssl_pkey_get_private(private_key: $privateKey);
        if (! $privateKey) {
            throw new InvalidArgumentException(message: 'Private key could not be parsed correctly.');
        }
        $keyInfo = openssl_pkey_get_details(key: $privateKey);
        if (! $keyInfo) {
            throw new InvalidArgumentException(message: 'Private key could not be parsed correctly.');
        }

        $n = $keyInfo['bits'] / 8;

        if ($keyInfo['bits'] % 8 != 0) {
            $n++;
        }
        $n = intval(value: $n);
        $x_byte_array = unpack(format: 'C*', string: $keyInfo['ec']['x']);
        $y_byte_array = unpack(format: 'C*', string: $keyInfo['ec']['y']);

        if (! $x_byte_array || ! $y_byte_array) {
            throw new InvalidArgumentException(message: 'Private key could not be parsed correctly.');
        }

        if ($n > count(value: $x_byte_array)) {
            $byte = [0];
            $x_byte_array = array_merge($byte, $x_byte_array);
        }
        if ($n > count(value: $y_byte_array)) {
            $byte = [0];
            $y_byte_array = array_merge($byte, $y_byte_array);
        }

        $xStr = pack('C*', ...$x_byte_array);
        $yStr = pack('C*', ...$y_byte_array);

        $jsonData = [
            'crv' => 'P-521', // $keyInfo['ec']["curve_name"],
            'kty' => 'EC',
            'x' => rtrim(string: str_replace(search: ['+', '/'], replace: ['-', '_'], subject: base64_encode(string: $xStr)), characters: '='),
            'y' => rtrim(string: str_replace(search: ['+', '/'], replace: ['-', '_'], subject: base64_encode(string: $yStr)), characters: '='),
        ];

        $data = json_encode(value: $jsonData);
        if (! $data) {
            return '';
        }
        $b = hash(algo: 'SHA256', data: $data, binary: true);

        return rtrim(string: str_replace(search: ['+', '/'], replace: ['-', '_'], subject: base64_encode(string: $b)), characters: '=');
    }

    /**
     * Returns the issuer string for the JWT token.
     *
     * @return non-empty-string The issuer.
     */
    private static function getIssuer(): string
    {
        $config = new SDKConfiguration();
        $issuer = $config->userAgent;
        if (empty($issuer)) {
            $issuer = 'speakeasy-sdk/php X.X.X X.X.X X.X.X gr4vy/gr4vy-php';
        }

        return $issuer;
    }
}
