<?php

use GlobalExam\Api\Sdk\Authentication\ClientCredentialsGrant;
use GlobalExam\Api\Sdk\Authentication\OAuthClient;

/**
 * Class ClientCredentialsGrantTest
 */
class ClientCredentialsGrantTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testConstructor()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new ClientCredentialsGrant($oauthClient);

        $this->assertInstanceOf(OAuthClient::class, $authenticator->getOAuthClient());
        $this->assertEquals('', $authenticator->getScope());
    }

    /**
     *
     */
    public function testGetGrantType()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new ClientCredentialsGrant($oauthClient);

        $this->assertEquals('client_credentials', $authenticator->getGrantType());
    }

    /**
     *
     */
    public function testGetHeaders()
    {
        $oauthClient   = new OAuthClient('clientId', 'clientSecret');
        $authenticator = new ClientCredentialsGrant($oauthClient);

        $this->assertEquals([], $authenticator->getHeaders());
    }
}
