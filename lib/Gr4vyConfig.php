<?php

namespace Gr4vy;

use Gr4vy\Configuration as Gr4vyConfiguration; 
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer;
use Lcobucci\JWT\Signer\Key\LocalFileReference;
use Lcobucci\JWT\Signer\Key\InMemory;
use DateTimeImmutable;

class Gr4vyConfig
{
    protected $gr4vyId;
    protected $privateKeyLocation;
    protected $host;
    protected $debug = false;

    /**
     * Constructor
     */
    public function __construct($gr4vyId, $privateKeyLocation, $debug=false)
    {
        $this->gr4vyId = $gr4vyId;
        $this->privateKeyLocation = $privateKeyLocation;
        $this->host = "https://api." . $gr4vyId .".gr4vy.app";
        $this->debug = $debug;
    }

    public function setGr4vyId($gr4vyId)
    {
        $this->gr4vyId = $gr4vyId;
        return $this;
    }

    public function getGr4vyId()
    {
        return $this->$gr4vyId;
    }

    public function setPrivateKeyLocation($privateKeyLocation)
    {
        $this->privateKeyLocation = $privateKeyLocation;
        return $this;
    }

    public function getPrivateKeyLocation()
    {
        return $this->privateKeyLocation;
    }

    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    public function getConfig()
    {
        $scopes = array("*.read", "*.write");
        $accessToken = self::getToken($this->privateKeyLocation, $scopes);
        $config = Gr4vyConfiguration::getDefaultConfiguration()
            ->setAccessToken($accessToken)
            ->setHost($this->getHost())
            ->setUserAgent("Gr4vy SDK PHP")
            ->setDebug($this->debug);

        return $config;
    }

    public function getEmbedToken($embed) {
        $scopes = array("embed");
        return self::getToken($this->privateKeyLocation, $scopes, $embed);
    }

    public static function getToken($private_key, $scopes = array(), $embed = array()) {

        $config = Configuration::forAsymmetricSigner(
            // You may use RSA or ECDSA and all their variations (256, 384, and 512) and EdDSA over Curve25519
            new Signer\Ecdsa\Sha512(),
            LocalFileReference::file($private_key),
            InMemory::base64Encoded('notused')
        );

        $kid = self::getThumbprint($private_key);

        $now   = new DateTimeImmutable();
        $tokenBuilder = $config->builder()
                // Configures the issuer (iss claim)
                ->issuedBy('Gr4vy SDK 0.0.1 - PHP 7.3')
                // Configures the id (jti claim)
                ->identifiedBy(self::gen_uuid())
                // Configures the time that the token was issue (iat claim)
                ->issuedAt($now)
                // Configures the time that the token can be used (nbf claim)
                ->canOnlyBeUsedAfter($now->modify('+1 minute'))
                // Configures the expiration time of the token (exp claim)
                ->expiresAt($now->modify('+1 hour'))
                // Configures a new claim, called "uid"
                ->withClaim('scopes', $scopes)
                // // Configures a new header, called "foo"
                ->withHeader('kid', $kid);

        if (isset($embed) && count($embed) > 0) {
            $tokenBuilder = $tokenBuilder->withClaim('embed', $embed);    
        }

        return $tokenBuilder->getToken($config->signer(), $config->signingKey());
    }

    private static function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    private static function getThumbprint($private_key) {
        $privateKey = openssl_pkey_get_private(file_get_contents($private_key));
        $keyInfo = openssl_pkey_get_details($privateKey);

        $n = $keyInfo["bits"] / 8;

        if ($keyInfo["bits"]%8 != 0) {
            $n++;
        }
        $n = intval($n);
        $x_byte_array = unpack('C*', $keyInfo['ec']['x']);
        $y_byte_array = unpack('C*', $keyInfo['ec']['y']);

        if ($n > count($x_byte_array)) {
            $byte = array(0);
            $x_byte_array = array_merge($byte, $x_byte_array);
        }
        if ($n > count($y_byte_array)) {
            $byte = array(0);
            $y_byte_array = array_merge($byte, $y_byte_array);
        }

        $xStr = pack('C*', ...$x_byte_array);
        $yStr = pack('C*', ...$y_byte_array);

        // print_r("====x====\n");
        // // print_r($x_byte_array . "\n");
        // var_dump($x_byte_array);
        // print_r("====y====\n");
        // // print_r($y_byte_array . "\n");
        // var_dump($y_byte_array);

        $jsonData = array(
                'crv' => "P-521",//$keyInfo['ec']["curve_name"],
                'kty' => 'EC',
                'x' => rtrim(str_replace(['+', '/'], ['-', '_'], base64_encode($xStr)), '='),
                'y' => rtrim(str_replace(['+', '/'], ['-', '_'], base64_encode($yStr)), '='),
        );

        $data = json_encode($jsonData);
        $b = hash("SHA256", $data, true);
        return rtrim(str_replace(['+', '/'], ['-', '_'], base64_encode($b)), '=');
    }
}
