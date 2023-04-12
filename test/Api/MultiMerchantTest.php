<?php
/**
 * BuyersApiTest
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
use \Gr4vy\Api\BuyersApi;
use \Gr4vy\Configuration;
use \Gr4vy\ApiException;
use \Gr4vy\ObjectSerializer;
use \GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

use \Gr4vy\MultiMerchantHeaderSelector;


/**
 * BuyersApiTest Class Doc Comment
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MultiMerchantTest extends TestCase
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
     * Test case for listBuyers
     *
     * List buyers.
     *
     */
    public function testListBuyers()
    {

        try {
            $headerSelector = new MultiMerchantHeaderSelector("default");
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $apiInstance = new BuyersApi(new Client(),$config->getConfig(), $headerSelector);
            $result = $apiInstance->listBuyers();
            $this->assertGreaterThan(0, count($result->getItems()), "Expected items to be greater than 0.");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
            // echo 'Exception when calling BuyersApi->listBuyers: ', $e->getMessage(), PHP_EOL;
        }
    }

    
}
