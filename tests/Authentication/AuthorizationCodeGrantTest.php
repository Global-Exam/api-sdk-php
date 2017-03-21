<?php

use GlobalExam\Api\Sdk\Authentication\AuthorizationCodeGrant;
use GlobalExam\Api\Sdk\Authentication\OAuthClient;

/**
 * Class OAuthTokenGrantTest
 */
class AuthorizationCodeGrantTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new AuthorizationCodeGrant($oauthClient, [
            'access_token'  => 'a',
            'refresh_token' => 'b',
            'expires_in'    => 1,
        ], '', [
            'Accept-Language' => 'fr',
            'x-subdomain'     => 'hec',
            'x-agent-country' => 'fr',
            'x-forwarded-for' => '0.0.0.0',
        ]);

        $this->assertInstanceOf(OAuthClient::class, $authenticator->getOAuthClient());
        $this->assertEquals('a', $authenticator->getAccessToken());
        $this->assertEquals('b', $authenticator->getRefreshToken());
        $this->assertEquals('1', $authenticator->getExpiresIn());
        $this->assertEquals('', $authenticator->getScope());
    }

    public function testGetGrantType()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new AuthorizationCodeGrant($oauthClient, [
            'access_token'  => 'a',
            'refresh_token' => 'b',
            'expires_in'    => 1,
        ], '', [
            'Accept-Language' => 'fr',
            'x-subdomain'     => 'hec',
            'x-agent-country' => 'fr',
            'x-forwarded-for' => '0.0.0.0',
        ]);

        $this->assertEquals(null, $authenticator->getGrantType());
    }

    public function testGetHeaders()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new AuthorizationCodeGrant($oauthClient, [
            'access_token'  => 'a',
            'refresh_token' => 'b',
            'expires_in'    => 1,
        ], '', [
            'Accept-Language' => 'fr',
            'x-subdomain'     => 'hec',
            'x-agent-country' => 'fr',
            'x-forwarded-for' => '0.0.0.0',
        ]);

        $headers = $authenticator->getHeaders();

        $this->assertEquals('fr', $headers['Accept-Language']);
        $this->assertEquals('hec', $headers['x-subdomain']);
        $this->assertEquals('fr', $headers['x-agent-country']);
        $this->assertEquals('0.0.0.0', $headers['x-forwarded-for']);
        $this->assertEquals('Bearer a', $headers['Authorization']);
    }
}
