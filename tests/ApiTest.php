<?php

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\OAuthPasswordGrant;
use GlobalExam\Api\Sdk\Authentication\OAuthTokenGrant;
use GuzzleHttp\Client;

/**
 * Class ApiTest
 */
class ApiTest extends \PHPUnit_Framework_TestCase
{
    //public function testBase()
    //{
    //    // First login: Email/Password
    //    $api = new Api(new OAuthPasswordGrant('yolo@yopmail.com', 'oklolmdr', '', ['country' => 'fr', 'ip' => '0.0.0.0']));
    //    $api->setBaseUrl('http://api.global-exam.dev');
    //
    //    // Keep this in memory
    //    $credentials = $api->login();
    //    $credentials = json_decode($credentials->getBody()->getContents(), true);
    //
    //    //sleep(9);
    //
    //    // Play authenticated calls
    //    $api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
    //    $api->setBaseUrl('http://api.global-exam.dev')->login();
    //
    //    //try {
    //    //    $api->user()->me();
    //    //} catch (\GuzzleHttp\Exception\ClientException $e) {
    //    //    // Expired token
    //    //    if ($e->getResponse()->getStatusCode() === 401) {
    //    //        // Ask new credentials based on the current refresh token
    //    //        $credentials = $api->user()->oauth()->renewToken();
    //    //        $credentials = json_decode($credentials->getBody()->getContents(), true);
    //    //
    //    //        // Set a fresh authenticator
    //    //        $api->setAuthenticator(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
    //    //
    //    //        $response = $api->user()->me();
    //    //        $response->getStatusCode(); // 200
    //    //    }
    //    //}
    //    //var_dump($response->getBody()->getContents());
    //
    //    //$api->logout();
    //
    //    // Guest call
    //    //$api = new Api();
    //    //$api->setBaseUrl('http://api.global-exam.dev');
    //
    //    //$response = $api->user()->auth()->register([]);
    //    //var_dump($response->getBody()->getContents());
    //
    //    // Expired token
    //}

    /**
     *
     */
    public function testConstructor()
    {
        $api = new Api();

        $this->assertNull($api->authenticator);
        $this->assertInstanceOf(Client::class, $api->client);

        $api = new Api(new OAuthPasswordGrant('email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']));

        $this->assertInstanceOf(OAuthPasswordGrant::class, $api->authenticator);
        $this->assertInstanceOf(Client::class, $api->client);

        $api = new Api(new OAuthTokenGrant(['access_token' => 'a', 'refresh_token' => 'b', 'expires_in' => 1], '', ['country' => 'fr', 'ip' => '0.0.0.0']), null);

        $this->assertInstanceOf(OAuthTokenGrant::class, $api->authenticator);
        $this->assertInstanceOf(Client::class, $api->client);
    }

    /**
     *
     */
    public function testSetBaseUrl()
    {
        $api = new Api();

        $this->assertInstanceOf(Api::class, $api->setBaseUrl('http://api.global-exam.io'));
    }

}
