<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

use Gr4vy\CheckoutSessionCreate;
use Gr4vy\CheckoutSessionWithUrlPaymentMethodCreate;
use Gr4vy\SDK;
use Gr4vy\Transaction;
use Gr4vy\TransactionCreate;
use GuzzleHttp\Client;

/**
 * The `PUT /checkout/sessions/{id}/fields` endpoint is a non-public, embed-only
 * endpoint that the SDK does not model. The tests drive it with a raw HTTP call,
 * exactly as a front-end SDK would — kept here so the lifecycle flows can attach
 * a card (or a stored method) to a session before authorizing.
 */
final class CheckoutFields
{
    /** Attach raw card details to a checkout session (returns the 204 from the field service). */
    public static function putCard(string $sessionId, array $card = []): void
    {
        self::put($sessionId, [
            'payment_method' => array_merge([
                'method' => 'card',
                'number' => Fixtures::APPROVING_CARD_NUMBER,
                'expiration_date' => Fixtures::CARD_EXPIRATION_DATE,
                'security_code' => Fixtures::CARD_SECURITY_CODE,
            ], $card),
        ]);
    }

    /** Attach a stored payment-method id to a checkout session. */
    public static function putStoredMethod(string $sessionId, string $paymentMethodId, string $securityCode = Fixtures::CARD_SECURITY_CODE): void
    {
        self::put($sessionId, [
            'payment_method' => [
                'method' => 'id',
                'id' => $paymentMethodId,
                'security_code' => $securityCode,
            ],
        ]);
    }

    /**
     * Full happy-path helper: create a checkout session, attach an approving card,
     * then authorize a transaction against it. Returns the created transaction.
     */
    public static function authorize(SDK $sdk, int $amount = 1299, string $currency = 'USD'): Transaction
    {
        $session = $sdk->checkoutSessions->create(new CheckoutSessionCreate())->checkoutSession;
        self::putCard($session->id);

        $transaction = $sdk->transactions->create(
            new TransactionCreate(
                amount: $amount,
                currency: $currency,
                paymentMethod: new CheckoutSessionWithUrlPaymentMethodCreate(id: $session->id),
            )
        )->transaction;

        return $transaction;
    }

    private static function put(string $sessionId, array $json): void
    {
        $client = new Client();
        $client->put(
            TestEnvironment::API_BASE_URL."/checkout/sessions/{$sessionId}/fields",
            [
                'headers' => ['content-type' => 'application/json'],
                'timeout' => 10,
                'json' => $json,
            ]
        );
    }
}
