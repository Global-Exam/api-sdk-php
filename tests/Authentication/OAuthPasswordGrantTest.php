<?php

use GlobalExam\Api\Sdk\Authentication\OAuthPasswordGrant;

/**
 * Class OAuthPasswordGrantTest
 */
class OAuthPasswordGrantTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testConstructor()
    {
        $authenticator = new OAuthPasswordGrant('email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']);

        $this->assertEquals('email@domain.com', $authenticator->username);
        $this->assertEquals('password', $authenticator->password);
        $this->assertEquals('', $authenticator->scope);
        $this->assertEquals(['country' => 'fr', 'ip' => '0.0.0.0'], $authenticator->meta);
    }

    /**
     *
     */
    public function testGetHeaders()
    {
        $authenticator = new OAuthPasswordGrant('email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']);

        $headers = $authenticator->getHeaders();

        $this->assertEquals('fr', $headers['x-agent-country']);
        $this->assertEquals('0.0.0.0', $headers['x-forwarded-for']);
    }

}
