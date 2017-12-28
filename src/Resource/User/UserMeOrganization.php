<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationGroup;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationLicense;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeOrganization
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeOrganization
{
    use Resource;

    const RESOURCE_KEY = 'user/me/relationships/organization';

    /**
     * UserMeOrganization constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function search(array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/search', $body, $params);
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
     * @param       $userId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOneUser($id, $userId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY . '/' . $userId, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationGroups($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . OrganizationGroup::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationLicenses($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . OrganizationLicense::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachUser($id, array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachUser($id, array $body = [])
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param       $file
     * @param array $data
     *
     * @return mixed|ResponseInterface
     */
    public function basicUserImport($id, $file, array $data = [])
    {
        $body = [
            [
                'name'     => 'file',
                'contents' => $file,
            ],
        ];

        return $this->api->sendFile('POST', static::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY . '/basic-import', array_merge($body, $data));
    }

    /**
     * @param       $id
     * @param       $file
     * @param array $data
     *
     * @return mixed|ResponseInterface
     */
    public function advancedUserImport($id, $file, array $data = [])
    {
        $body = [
            [
                'name'     => 'file',
                'contents' => $file,
            ],
        ];

        return $this->api->sendFile('POST', static::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY . '/advanced-import', array_merge($body, $data));
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachUserProvider($id, array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/' . UserProvider::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachUserProvider($id, array $body = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/' . UserProvider::RESOURCE_KEY, $body);
    }
}
