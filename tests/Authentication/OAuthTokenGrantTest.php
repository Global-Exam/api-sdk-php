<?php

use GlobalExam\Api\Sdk\Authentication\OAuthTokenGrant;

/**
 * Class OAuthTokenGrantTest
 */
class OAuthTokenGrantTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testConstructor()
    {
        $authenticator = new OAuthTokenGrant(['access_token' => 'a', 'refresh_token' => 'b', 'expires_in' => 1], '', ['country' => 'fr', 'ip' => '0.0.0.0']);

        $this->assertEquals('a', $authenticator->accessToken);
        $this->assertEquals('b', $authenticator->refreshToken);
        $this->assertEquals('1', $authenticator->expiresIn);
        $this->assertEquals('', $authenticator->scope);
        $this->assertEquals(['country' => 'fr', 'ip' => '0.0.0.0'], $authenticator->meta);
    }

    /**
     *
     */
    public function testGetHeaders()
    {
        $authenticator = new OAuthTokenGrant(['access_token' => 'a', 'refresh_token' => 'b', 'expires_in' => 1], '', ['country' => 'fr', 'ip' => '0.0.0.0']);

        $headers = $authenticator->getHeaders();

        $this->assertEquals('fr', $headers['x-agent-country']);
        $this->assertEquals('0.0.0.0', $headers['x-forwarded-for']);
        $this->assertEquals('Bearer a', $headers['Authorization']);
    }

}
