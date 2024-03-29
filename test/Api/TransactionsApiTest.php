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
            $transaction_request = array("amount"=>1000,"currency"=>"USD", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/24", "security_code"=>"432"));
            $result = $config->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "transaction");
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

        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $transaction_request = array("intent"=>"authorize", "amount"=>100,"currency"=>"USD", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/28", "security_code"=>"555"));
            $result = $config->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "transaction");

            $capture_request = array("amount"=>100);
            $result = $config->captureTransaction($result["id"], $capture_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "transaction");
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
            $transaction_request = array("amount"=>10000,"currency"=>"USD", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/28", "security_code"=>"555"));
            $result = $config->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "transaction");

            $result = $config->getTransaction($result["id"]);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "transaction");
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
            $result = $config->listTransactions();
            $this->assertGreaterThan(0, count($result["items"]), "Expected items to be greater than 0.");
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
    public function testListTransactionsWithParams()
    {
        try {
            $params = array(
                "limit"=>2,
            );
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $result = $config->listTransactions($params);
            $this->assertEquals(2, count($result["items"]), "Expected items to be equal to 2.");
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

        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $transaction_request = array("amount"=>100,"currency"=>"USD", "intent"=>"capture", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/28", "security_code"=>"555"));
            $result = $config->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "transaction");

            $refund_request = array("amount"=>100);

            $result = $config->refundTransaction($result["id"], $refund_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "refund");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for voidTransaction
     *
     * Void transaction.
     *
     */
    public function testVoidTransaction()
    {

        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $transaction_request = array("amount"=>100,"currency"=>"USD", "intent"=>"authorize", "payment_method"=>array("method"=>"card", "number"=>"4111111111111111", "expiration_date"=> "01/28", "security_code"=>"555"));
            $result = $config->authorizeNewTransaction($transaction_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["type"], "transaction");

            $result = $config->voidTransaction($result["id"]);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["status"], "authorization_voided");
            // print_r($result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }
}
