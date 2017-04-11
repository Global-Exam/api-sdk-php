<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\BoardSession;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationLicense;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class User
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class User
{
    use Resource;

    const RESOURCE_KEY = 'user';

    /**
     * User constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function me(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/me', [], $params);
    }

    /**
     * @param $id
     *
     * @return mixed|ResponseInterface
     */
    public function disable($id)
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/disable');
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function changePassword(array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/me/change-password', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function sendAccountConfirmation(array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/me/send-account-confirmation', $body);
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function logout()
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/logout');
    }

    /**
     * @param $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardSessions($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . BoardSession::RESOURCE_KEY, [], $params);
    }

    /**
     * @param $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getUserLicenses($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . UserLicense::RESOURCE_KEY, [], $params);
    }

    /**
     * @param $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationLicenses($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/relationships/' . OrganizationLicense::RESOURCE_KEY, [], $params);
    }
}
