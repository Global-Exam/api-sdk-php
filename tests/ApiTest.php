<?php

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\AuthorizationCodeGrant;
use GlobalExam\Api\Sdk\Authentication\OAuthClient;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;

/**
 * Class ApiTest
 */
class ApiTest extends \PHPUnit_Framework_TestCase
{
    public function testBase()
    {
        $oauthClient = new OAuthClient(3, 'cjj3lAy8CHouevJNKtxqzJs1LjClGyMzJ2uQJM2y');

        //$api = new Api(new ClientCredentialsGrant($oauthClient));
        //$api->setBaseUrl('https://api.global-exam.dev');
        //
        //$tokens = $api->login();
        //$tokens = json_decode($tokens->getBody()->getContents(), true);
        //
        //// Play authenticated calls
        //$api->setAuthenticator(new AuthorizationCodeGrant($oauthClient, $tokens));
        //
        //$response = $api->send('GET', '/blog-category');
        //
        //var_dump(json_decode($response->getBody()->getContents(), true));

        // First login: Email/Password
        //$api = new Api(new PasswordCredentialsGrant($oauthClient, 'syl@yopmail.com', 'oklolmdr', '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        //$api->setBaseUrl('https://api.global-exam.dev');

        // Keep this in memory
        //$tokens = $api->login();
        //$tokens = json_decode($tokens->getBody()->getContents(), true);

        // Provider
        //$api = new Api(new \GlobalExam\Api\Sdk\Authentication\SocialCredentialsGrant($oauthClient, 'twitter', '1871639240-RH4mEYLu3i2Biz2QMECLVQuP0N20TXj77gMEV56', 'XcuGLAgeN2wMn9bt9nyqLQV2S2aOUmaOZVvU85rjHtOJV', '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        //$api->setBaseUrl('https://api.global-exam.dev');

         //Keep this in memory
        //$tokens = $api->login();
        //$tokens = json_decode($tokens->getBody()->getContents(), true);

        //var_dump($tokens);
        //die();
        //sleep(9);

        // Play authenticated calls
        //$api = new Api(new AuthorizationCodeGrant($oauthClient, $tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        //$api->setBaseUrl('https://api.global-exam.dev')->login();
        //
        //try {
        //    $api->blogPost()->createCover(1, fopen('26757268-thumb2_9.jpg', 'r'));
        //} catch (\GuzzleHttp\Exception\ClientException $exception) {
        //    var_dump($exception->getResponse()->getBody()->getContents());
        //}

        //try {
        //    $api->user()->me();
        //} catch (\GuzzleHttp\Exception\ClientException $e) {
        //    // Expired token
        //    if ($e->getResponse()->getStatusCode() === 401) {
        //        // Ask new credentials based on the current refresh token
        //        $tokens = $api->user()->oauth()->renewToken();
        //        $tokens = json_decode($tokens->getBody()->getContents(), true);
        //
        //        // Set a fresh authenticator
        //        $api->setAuthenticator(new OAuthTokenGrant($tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        //
        //        $response = $api->user()->me();
        //        $response->getStatusCode(); // 200
        //    }
        //}
        //var_dump($response->getBody()->getContents());

        //$api->logout();

        // Guest call
        //$api = new Api();
        //$api->setBaseUrl('https://api.global-exam.dev');

        //$response = $api->user()->auth()->register([]);
        //var_dump($response->getBody()->getContents());

        // Expired token
    }

    public function testConstructor()
    {
        $api = new Api();

        $this->assertNull($api->getAuthenticator());

        $oauthClient = new OAuthClient('clientId', 'clientSecret');

        $api = new Api(new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']));

        $this->assertInstanceOf(PasswordCredentialsGrant::class, $api->getAuthenticator());

        $api = new Api(new AuthorizationCodeGrant($oauthClient, ['access_token' => 'a', 'refresh_token' => 'b', 'expires_in' => 1], '', ['country' => 'fr', 'ip' => '0.0.0.0']), null);

        $this->assertInstanceOf(AuthorizationCodeGrant::class, $api->getAuthenticator());
    }

    public function testBaseUrl()
    {
        $api = new Api();

        $this->assertInstanceOf(Api::class, $api->setBaseUrl('http://api.global-exam.io'));
    }

    public function testAuthenticator()
    {
        $api = new Api();

        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']);

        $this->assertInstanceOf(Api::class, $api->setAuthenticator($authenticator));
        $this->assertInstanceOf(PasswordCredentialsGrant::class, $api->getAuthenticator());
    }
}
