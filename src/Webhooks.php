<?php

declare(strict_types=1);

namespace Gr4vy;

/**
 * Utility class for handling Gr4vy webhook verification.
 */
class Webhooks
{
    /**
     * Verifies the signature and timestamp of a Gr4vy webhook request.
     *
     * @param  string  $secret  The webhook secret key used to generate the HMAC signature.
     * @param  string  $payload  The raw payload of the webhook request.
     * @param  string|null  $signatureHeader  The value of the `X-Signature` header from the webhook request.
     * @param  string|null  $timestampHeader  The value of the `X-Timestamp` header from the webhook request.
     * @param  int  $timestampTolerance  Optional. The maximum allowed difference (in seconds) between the current time and the webhook timestamp. Defaults to 0 (no tolerance).
     *
     * @return void
     * @throws \Exception If required headers are missing, the timestamp is invalid, the signature does not match, or the timestamp is too old.
     *
     */
    public static function verifyWebhook(
        $secret,
        $payload,
        $signatureHeader,
        $timestampHeader,
        $timestampTolerance = 0
    ): void {
        if (empty($signatureHeader) || empty($timestampHeader)) {
            throw new \Exception(message: 'Missing header values');
        }

        if (! is_numeric(value: $timestampHeader)) {
            throw new \Exception(message: 'Invalid header timestamp');
        }

        $timestamp = (int) $timestampHeader;
        $signatures = explode(separator: ',', string: $signatureHeader);
        $expectedSignature = hash_hmac(
            algo: 'sha256',
            data: $timestamp.'.'.$payload,
            key: $secret
        );

        if (! in_array(needle: $expectedSignature, haystack: $signatures, strict: true)) {
            throw new \Exception(message: 'No matching signature found');
        }

        if ($timestampTolerance > 0 && $timestamp < (time() - $timestampTolerance)) {
            throw new \Exception(message: 'Timestamp too old');
        }
    }
}