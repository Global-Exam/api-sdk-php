<?php

use GlobalExam\Api\Sdk\Authentication\OAuthClient;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;

/**
 * Class AuthorizationCodeGrantTest
 */
class PasswordCredentialsGrantTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', [
            'Accept-Language' => 'fr',
            'x-subdomain'     => 'hec',
            'x-agent-country' => 'fr',
            'x-forwarded-for' => '0.0.0.0',
        ]);

        $this->assertInstanceOf(OAuthClient::class, $authenticator->getOAuthClient());
        $this->assertEquals('email@domain.com', $authenticator->getUsername());
        $this->assertEquals('password', $authenticator->getPassword());
        $this->assertEquals('', $authenticator->getScope());
    }

    public function testGetGrantType()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', [
            'Accept-Language' => 'fr',
            'x-subdomain'     => 'hec',
            'x-agent-country' => 'fr',
            'x-forwarded-for' => '0.0.0.0',
        ]);

        $this->assertEquals('password', $authenticator->getGrantType());
    }

    public function testGetHeaders()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', [
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
