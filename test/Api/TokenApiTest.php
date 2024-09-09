<?php

namespace Gr4vy\Test\Api;

use \Gr4vy\Gr4vyConfig;
use \Gr4vy\Api\BuyersApi;
use \GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class TokenApiTest extends TestCase
{
    private static $privateKeyLocation = __DIR__ . "/../../private_key.pem";
    private static $gr4vyId = "spider";

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    public function testGetToken()
    {
        try {
            $token = Gr4vyConfig::getToken(self::$privateKeyLocation, array("*.read"));
            $this->assertGreaterThan(0, strlen($token), "Expected length to be greater than 0.");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    public function testGetEmbedToken()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $embed = array("amount"=> 200, "currency" => "USD", "buyer_id"=> "d757c76a-cbd7-4b56-95a3-40125b51b29c");
            $embedToken = $config->getEmbedToken($embed);

            $this->assertGreaterThan(0, strlen($embedToken), "Expected length to be greater than 0.");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }


    public function testAddBuyerAndEmbed()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new BuyersApi(new Client(),$config->getConfig());

            $buyer_request = array("external_identifier"=>"412231123","display_name"=>"Tester T.");
            $result = $apiInstance->addBuyer($buyer_request);
            $this->assertArrayHasKey("id", $result);

            $embed = array("amount"=> 200, "currency" => "USD", "buyer_id"=> $result->getId());
            $embedToken = $config->getEmbedToken($embed);
            $this->assertGreaterThan(0, strlen($embedToken), "Expected length to be greater than 0.");

            $result = $apiInstance->deleteBuyer($result->getId());
            $this->assertEmpty($result);

        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

}
