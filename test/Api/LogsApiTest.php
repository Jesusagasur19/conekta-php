<?php
/**
 * LogsApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Conekta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Conekta API
 *
 * Conekta sdk
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: engineering@conekta.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Conekta\Test\Api;

use Conekta\Api\LogsApi;
use \Conekta\Configuration;
use \Conekta\ApiException;
use \Conekta\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * LogsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Conekta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LogsApiTest extends TestCase
{

    protected static LogsApi $apiInstance;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        $config = Configuration::getDefaultConfiguration()->setHost(BaseTest::$host);
        self::$apiInstance = new LogsApi(null, $config);
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
     * Test case for getLogById
     *
     * Get Log.
     *
     */
    public function testGetLogById()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->getLogById('id', $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for getLogs
     *
     * Get List Of Logs.
     *
     */
    public function testGetLogs()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->getLogs('id', $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }
}