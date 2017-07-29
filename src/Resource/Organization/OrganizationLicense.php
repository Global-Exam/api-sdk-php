<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\Board;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\User\User;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrganizationLicense
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationLicense
{
    use Resource;

    const RESOURCE_KEY = 'organization-license';

    /**
     * OrganizationLicense constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getUsers($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncUser($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/relationships/' . User::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoards($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . Board::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncBoard($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/relationships/' . Board::RESOURCE_KEY, $body);
    }
}
