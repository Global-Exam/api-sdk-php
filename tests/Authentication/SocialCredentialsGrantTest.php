<?php

use GlobalExam\Api\Sdk\Authentication\OAuthClient;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;
use GlobalExam\Api\Sdk\Authentication\SocialCredentialsGrant;

/**
 * Class SocialCredentialsGrantTest
 */
class SocialCredentialsGrantTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new SocialCredentialsGrant($oauthClient, 'google', 'access_token', null, '', [
            'Accept-Language' => 'fr',
            'x-subdomain'     => 'hec',
            'x-agent-country' => 'fr',
            'x-forwarded-for' => '0.0.0.0',
        ]);

        $this->assertInstanceOf(OAuthClient::class, $authenticator->getOAuthClient());
        $this->assertEquals('google', $authenticator->getNetwork());
        $this->assertEquals('access_token', $authenticator->getAccessToken());
        $this->assertEquals(null, $authenticator->getAccessTokenSecret());
        $this->assertEquals('', $authenticator->getScope());
    }

    public function testGetGrantType()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new SocialCredentialsGrant($oauthClient, 'google', 'access_token', null, '', [
            'Accept-Language' => 'fr',
            'x-subdomain'     => 'hec',
            'x-agent-country' => 'fr',
            'x-forwarded-for' => '0.0.0.0',
        ]);

        $this->assertEquals('social', $authenticator->getGrantType());
    }

    public function testGetHeaders()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new SocialCredentialsGrant($oauthClient, 'google', 'access_token', null, '', [
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
    }
}
