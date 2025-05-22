<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use Gr4vy\Auth;

final class AuthTest extends TestCase
{
    const THUMBPRINT = "va-SLs5AxJNfqKXD8LI5Y38BflpNvjZjY4RSWz66U1w";

    const PRIVATE_KEY = "-----BEGIN PRIVATE KEY-----
MIHuAgEAMBAGByqGSM49AgEGBSuBBAAjBIHWMIHTAgEBBEIBABM9jQu+HT87oIik
O6DiJjYeghr3V+VMBVNU2hCM3X/OAS6TUTylMbnjDnwWdmu7anVSnjvEY1a4KxQ9
WZ8E/PKhgYkDgYYABABRdv5VAtOsGb6THxeK/p7RAARPm6Zwb7FF4sZAYkkSB7h0
2jpj3UHSpyl92BQkiF/xakz7hMMD1A0ZTn5SuXWp3AG9qPHO3eB9WrZhPGYixwyo
XNjhnPEDhmkItKXteke9iBOTOOXB7AFQSh7EXRBmhBs4u3ZlTmrl+8VdBc3+jwAY
rw==
-----END PRIVATE KEY-----";

    public function testKeyId(): void
    {
        $actual = Auth::getToken(privateKey: self::PRIVATE_KEY);

        $this->assertSame(expected: self::THUMBPRINT, actual: $actual);
    }
}
