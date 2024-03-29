<?php
/**
 * PaymentServicesApiTest
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
 * PaymentServicesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentServicesApiTest extends TestCase
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
     * Test case for addPaymentService
     *
     * New payment service.
     *
     */
    public function testAddPaymentService()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);

            $payment_service_request = array(
                "accepted_countries"=>array("GB", "US"),
                "accepted_currencies"=>array("GBP", "USD"),
                "display_name" => "Stripe SN",
                "fields" => array(
                    array(
                        "key"=>"secret_key",
                        "value"=>"sk_test_51IkXd4C4K0WD5Kw9hkuQUkWq5PB4XGW7UcYdkVj5tuLh9dHiuOSbvdSlEVd3s8r3N3MJwTawwspGLmZGwHnHD0c800KA5x6rzk"
                    )
                ),
                "payment_service_definition_id" => "stripe-card"
            );
            $result = $config->addPaymentService($payment_service_request);

            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["payment_service_definition_id"], "stripe-card");

            $result = $config->deletePaymentService($result["id"]);
            $this->assertArrayHasKey("success", $result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for deletePaymentService
     *
     * Delete payment service.
     *
     */
    public function testDeletePaymentService()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);

            $payment_service_request = array(
                "accepted_countries"=>array("GB", "US"),
                "accepted_currencies"=>array("GBP", "USD"),
                "display_name" => "Stripe SN",
                "fields" => array(
                    array(
                        "key"=>"secret_key",
                        "value"=>"sk_test_51IkXd4C4K0WD5Kw9hkuQUkWq5PB4XGW7UcYdkVj5tuLh9dHiuOSbvdSlEVd3s8r3N3MJwTawwspGLmZGwHnHD0c800KA5x6rzk"
                    )
                ),
                "payment_service_definition_id" => "stripe-card"
            );
            $result = $config->addPaymentService($payment_service_request);

            $this->assertArrayHasKey("id", $result);

            $result = $config->deletePaymentService($result["id"]);
            $this->assertArrayHasKey("success", $result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for getPaymentService
     *
     * Get payment service.
     *
     */
    public function testGetPaymentService()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);

            $payment_service_request = array(
                "accepted_countries"=>array("GB", "US"),
                "accepted_currencies"=>array("GBP", "USD"),
                "display_name" => "Stripe SN",
                "fields" => array(
                    array(
                        "key"=>"secret_key",
                        "value"=>"sk_test_51IkXd4C4K0WD5Kw9hkuQUkWq5PB4XGW7UcYdkVj5tuLh9dHiuOSbvdSlEVd3s8r3N3MJwTawwspGLmZGwHnHD0c800KA5x6rzk"
                    )
                ),
                "payment_service_definition_id" => "stripe-card"
            );
            $result = $config->addPaymentService($payment_service_request);

            $this->assertArrayHasKey("id", $result);

            $result = $config->getPaymentService($result["id"]);
            $this->assertArrayHasKey("id", $result);

            $result = $config->deletePaymentService($result["id"]);
            $this->assertArrayHasKey("success", $result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for listPaymentServices
     *
     * List payment services.
     *
     */
    public function testListPaymentServices()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $result = $config->listPaymentServices();
            $this->assertGreaterThan(0, count($result["items"]), "Expected items to be greater than 0.");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for updatePaymentService
     *
     * Update payment service.
     *
     */
    public function testUpdatePaymentService()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);

            $payment_service_request = array(
                "accepted_countries"=>array("GB", "US"),
                "accepted_currencies"=>array("GBP", "USD"),
                "display_name" => "Stripe SN",
                "fields" => array(
                    array(
                        "key"=>"secret_key",
                        "value"=>"sk_test_51IkXd4C4K0WD5Kw9hkuQUkWq5PB4XGW7UcYdkVj5tuLh9dHiuOSbvdSlEVd3s8r3N3MJwTawwspGLmZGwHnHD0c800KA5x6rzk"
                    )
                ),
                "payment_service_definition_id" => "stripe-card"
            );
            $result = $config->addPaymentService($payment_service_request);

            $this->assertArrayHasKey("id", $result);

            $payment_service_update = array(
                "display_name" => "Stripe Update",
            );
            $result = $config->updatePaymentService($result["id"], $payment_service_update);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["display_name"], "Stripe Update");

            $result = $config->deletePaymentService($result["id"]);
            $this->assertArrayHasKey("success", $result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }
}
