<?php

declare(strict_types=1);

use Gr4vy\Webhooks;
use PHPUnit\Framework\TestCase;

final class WebhooksTest extends TestCase
{
    const SECRET = 'Ik4L-8FH0ihWczctcIPXZRR_8F0fPNgmhEfVBbZ3zNwqQVa1Or4tBz4Pgw2eNaVDod7H56Y268h_wohEUaWbUg';
    const PAYLOAD = 'payload';
    const TIMESTAMP_HEADER = '1744018920';
    const VALID_SIGNATURE = '78aca0c78005107a654a957b8566fa6e0e5e06aea92d7da72a6da9e5a690d013';
    const SIGNATURE_HEADER = '78aca0c78005107a654a957b8566fa6e0e5e06aea92d7da72a6da9e5a690d013,other';

    public function test_verifies_webhook_signature(): void
    {
        $this->expectNotToPerformAssertions();
        Webhooks::verifyWebhook(
            secret: self::SECRET,
            payload: self::PAYLOAD,
            signatureHeader: self::SIGNATURE_HEADER,
            timestampHeader: self::TIMESTAMP_HEADER,
            timestampTolerance: 0
        );
    }

    public function test_raises_error_for_old_timestamp(): void
    {
        $oldTimestamp = (string) (time() - 120); // 2 minutes ago
        $signature = hash_hmac('sha256', $oldTimestamp.'.'.self::PAYLOAD, self::SECRET);
        $header = $signature.',other';

        $this->expectExceptionMessage('Timestamp too old');
        Webhooks::verifyWebhook(
            self::SECRET,
            self::PAYLOAD,
            $header,
            $oldTimestamp,
            60 // 1 minute tolerance
        );
    }

    public function test_raises_error_for_wrong_signature(): void
    {
        $this->expectExceptionMessage('No matching signature found');
        Webhooks::verifyWebhook(
            self::SECRET,
            self::PAYLOAD,
            'other',
            self::TIMESTAMP_HEADER,
            0
        );
    }

    public function test_raises_error_for_invalid_timestamp(): void
    {
        $this->expectExceptionMessage('Invalid header timestamp');
        Webhooks::verifyWebhook(
            self::SECRET,
            self::PAYLOAD,
            self::SIGNATURE_HEADER,
            'wrong',
            0
        );
    }

    public function test_raises_error_for_missing_signature_header(): void
    {
        $this->expectExceptionMessage('Missing header values');
        Webhooks::verifyWebhook(
            self::SECRET,
            self::PAYLOAD,
            null,
            self::TIMESTAMP_HEADER,
            0
        );
    }

    public function test_raises_error_for_missing_timestamp_header(): void
    {
        $this->expectExceptionMessage('Missing header values');
        Webhooks::verifyWebhook(
            self::SECRET,
            self::PAYLOAD,
            self::SIGNATURE_HEADER,
            null,
            0
        );
    }
}