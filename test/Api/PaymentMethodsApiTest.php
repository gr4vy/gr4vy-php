<?php
/**
 * PaymentMethodsApiTest
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
use \Gr4vy\Api\PaymentMethodsApi;
use \GuzzleHttp\Client;
use \Gr4vy\Configuration;
use \Gr4vy\ApiException;
use \Gr4vy\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * PaymentMethodsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentMethodsApiTest extends TestCase
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
     * Test case for deletePaymentMethod
     *
     * Delete payment method.
     *
     */
    public function testDeletePaymentMethod()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new PaymentMethodsApi(new Client(),$config->getConfig());

            $payment_method_request = array(
                "method"=>"card",
                "number"=>"4111111111111111",
                "expiration_date"=>"11/25",
                "security_code"=>"123"
            );
            $result = $apiInstance->storePaymentMethod($payment_method_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getMethod(), "card");

            $result = $apiInstance->deletePaymentMethod($result->getId());
            $this->assertEmpty($result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for getPaymentMethod
     *
     * Get stored payment method.
     *
     */
    public function testGetPaymentMethod()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new PaymentMethodsApi(new Client(),$config->getConfig());

            $payment_method_request = array(
                "method"=>"card",
                "number"=>"4111111111111111",
                "expiration_date"=>"11/25",
                "security_code"=>"123"
            );
            $result = $apiInstance->storePaymentMethod($payment_method_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getMethod(), "card");

            $result = $apiInstance->getPaymentMethod($result["id"]);
            $this->assertArrayHasKey("id", $result);

            $result = $apiInstance->deletePaymentMethod($result->getId());
            $this->assertEmpty($result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for listBuyerPaymentMethods
     *
     * List stored payment methods for a buyer.
     *
     */
    public function testListBuyerPaymentMethods()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new PaymentMethodsApi(new Client(),$config->getConfig());
            $result = $apiInstance->listBuyerPaymentMethods("baa7b3b3-a4f1-49e3-afb0-0f41b48f5aa2");
            $this->assertCount(1, $result->getItems());

        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for listPaymentMethods
     *
     * List payment methods.
     *
     */
    public function testListPaymentMethods()
    {
        // $this->markTestIncomplete('Not implemented');
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new PaymentMethodsApi(new Client(),$config->getConfig());
            $result = $apiInstance->listPaymentMethods();
            $this->assertGreaterThan(0, count($result->getItems()), "Expected items to be greater than 0.");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for storePaymentMethod
     *
     * New payment method.
     *
     */
    public function testStorePaymentMethod()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new PaymentMethodsApi(new Client(),$config->getConfig());

            $payment_method_request = array(
                "method"=>"card",
                "number"=>"4111111111111111",
                "expiration_date"=>"11/25",
                "security_code"=>"123"
            );
            $result = $apiInstance->storePaymentMethod($payment_method_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result->getMethod(), "card");

            $result = $apiInstance->deletePaymentMethod($result->getId());
            $this->assertEmpty($result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }
}
