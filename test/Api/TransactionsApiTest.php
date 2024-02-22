<?php
/**
 * TransactionsApiTest
 * PHP version 7.2
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gr4vy API (Beta)
 *
 * Welcome to the Gr4vy API reference documentation. Our API is still very much a work in product and subject to change.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: code@gr4vy.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Gr4vy\Test\Api;

use \Gr4vy\Gr4vyConfig;
use \Gr4vy\Api\TransactionsApi;
use \GuzzleHttp\Client;
use \Gr4vy\Configuration;
use \Gr4vy\ApiException;
use \Gr4vy\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * TransactionsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionsApiTest extends TestCase
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

    /**
     * Test case for authorizeNewTransaction
     *
     * New transaction.
     *
     */
    public function testAuthorizeNewTransaction()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new TransactionsApi(new Client(),$config->getConfig());
            //TODO: GBP/braintree was failing
            $transaction_request = array("amount"=>1000,"currency"=>"USD", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/24", "security_code"=>"432"), "anti_fraud_fingerprint"=>"123456");
            $result = $apiInstance->authorizeNewTransaction($transaction_request, "216.164.198.29");
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getType(), "transaction");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }


    /**
     * Test case for captureTransaction
     *
     * Capture transaction.
     *
     */
    public function testCaptureTransaction()
    {
        $this->markTestIncomplete('Not implemented');

        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new TransactionsApi(new Client(),$config->getConfig());
            $transaction_request = array("amount"=>100,"currency"=>"USD", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/28", "security_code"=>"555"));
            $result = $apiInstance->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getType(), "transaction");

            $result = $apiInstance->captureTransaction($result["id"]);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getType(), "transaction");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for getTransaction
     *
     * Get transaction.
     *
     */
    public function testGetTransaction()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new TransactionsApi(new Client(),$config->getConfig());
            $transaction_request = array("amount"=>10000,"currency"=>"USD", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/28", "security_code"=>"555"));
            $result = $apiInstance->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getType(), "transaction");

            $result = $apiInstance->getTransaction($result["id"]);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getType(), "transaction");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for listTransactions
     *
     * List transactions.
     *
     */
    public function testListTransactions()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new TransactionsApi(new Client(),$config->getConfig());
            $result = $apiInstance->listTransactions(null, null, null, 5, null, null, null);
            $this->assertGreaterThan(0, count($result->getItems()), "Expected items to be greater than 0.");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for refundTransaction
     *
     * Refund or void transaction.
     *
     */
    public function testRefundTransaction()
    {
        $this->markTestIncomplete('Not implemented');

        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new TransactionsApi(new Client(),$config->getConfig());
            $transaction_request = array("amount"=>100,"currency"=>"USD", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/28", "security_code"=>"555"));
            $result = $apiInstance->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getType(), "transaction");

            $result = $apiInstance->refundTransaction($result["id"]);
            print_r($result);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getType(), "transaction");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }
}
