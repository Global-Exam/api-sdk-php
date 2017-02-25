<?php
use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\OAuthPasswordGrant;
use GlobalExam\Api\Sdk\Authentication\OAuthTokenGrant;

/**
 * Class ApiTest
 */
class ApiTest extends \PHPUnit_Framework_TestCase
{
    public function testBase()
    {
        // First login: Email/Password
        $api = new Api(new OAuthPasswordGrant('yolo@yopmail.com', 'oklolmdr', '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        $api->setBaseUrl('http://api.global-exam.dev');

        // Keep this in memory
        $credentials = $api->login();

        // Play authenticated calls
        $api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        $api->setBaseUrl('http://api.global-exam.dev')->login();

        $response = $api->user()->me();
        var_dump($response);

        $api->logout();

        // Guest call
        $api = new Api();
        $api->setBaseUrl('http://api.global-exam.dev');

        $response = $api->auth()->create([]);
        var_dump($response);

        // Expired token
        //if ($response['status'] === 401) {
        //    $credentials = $api->oauth()->renewToken();
        //
        //    $api->setAuthenticator(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        //
        //    $response = $api->user()->me();
        //    var_dump($response);
        //}

    }
}
