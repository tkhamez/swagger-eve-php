<?php
/**
 * CharacterApiTest
 * PHP version 7.2
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * The version of the OpenAPI document: 1.7.15
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client\Eve\Test\Api;

use \Swagger\Client\Eve\Configuration;
use \Swagger\Client\Eve\ApiException;
use \Swagger\Client\Eve\ObjectSerializer;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\Response;
use Swagger\Client\Eve\Api\CharacterApi;
use Swagger\Client\Eve\Model\GetCharactersCharacterIdNotifications200Ok;
use Swagger\Client\Eve\Test\Client;

/**
 * CharacterApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CharacterApiTest extends TestCase
{

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
     * Test case for getCharactersCharacterId
     *
     * Get character's public information.
     *
     */
    public function testGetCharactersCharacterId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdAgentsResearch
     *
     * Get agents research.
     *
     */
    public function testGetCharactersCharacterIdAgentsResearch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdBlueprints
     *
     * Get blueprints.
     *
     */
    public function testGetCharactersCharacterIdBlueprints()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdCorporationhistory
     *
     * Get corporation history.
     *
     */
    public function testGetCharactersCharacterIdCorporationhistory()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdFatigue
     *
     * Get jump fatigue.
     *
     */
    public function testGetCharactersCharacterIdFatigue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdMedals
     *
     * Get medals.
     *
     */
    public function testGetCharactersCharacterIdMedals()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdNotifications
     *
     * Get character notifications.
     *
     */
    public function testGetCharactersCharacterIdNotifications()
    {
        $api = new CharacterApi(new Client(new Response(200, [], '[{"type": "InvalidEnumValue"}]')));
        $result = $api->getCharactersCharacterIdNotifications(96061222);
        $this->assertInstanceOf(GetCharactersCharacterIdNotifications200Ok::class, $result[0]);
    }

    /**
     * Test case for getCharactersCharacterIdNotificationsContacts
     *
     * Get new contact notifications.
     *
     */
    public function testGetCharactersCharacterIdNotificationsContacts()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdPortrait
     *
     * Get character portraits.
     *
     */
    public function testGetCharactersCharacterIdPortrait()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdRoles
     *
     * Get character corporation roles.
     *
     */
    public function testGetCharactersCharacterIdRoles()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdStandings
     *
     * Get standings.
     *
     */
    public function testGetCharactersCharacterIdStandings()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getCharactersCharacterIdTitles
     *
     * Get character corporation titles.
     *
     */
    public function testGetCharactersCharacterIdTitles()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for postCharactersAffiliation
     *
     * Character affiliation.
     *
     */
    public function testPostCharactersAffiliation()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for postCharactersCharacterIdCspa
     *
     * Calculate a CSPA charge cost.
     *
     */
    public function testPostCharactersCharacterIdCspa()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
