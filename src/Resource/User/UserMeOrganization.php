<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\Board;
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
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-group', [], $params);
    }

    /**
     * @param       $id
     * @param       $organizationGroupId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationGroup($id, $organizationGroupId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function createOrganizationGroup($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-group', $body, $params);
    }

    /**
     * @param       $id
     * @param       $organizationGroupId
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function updateOrganizationGroup($id, $organizationGroupId, array $body = [], array $params = [])
    {
        return $this->api->send('PUT', self::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId, $body, $params);
    }

    /**
     * @param $id
     * @param $organizationGroupId
     *
     * @return mixed|ResponseInterface
     */
    public function deleteOrganizationGroup($id, $organizationGroupId)
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId);
    }

    /**
     * @param       $id
     * @param       $organizationGroupId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationGroupUsers($id, $organizationGroupId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId . '/relationships/' . User::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param       $organizationGroupId
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachOrganizationGroupUser($id, $organizationGroupId, array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId . '/relationships/' . User::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param       $organizationGroupId
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachOrganizationGroupUser($id, $organizationGroupId, array $body = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId . '/relationships/' . User::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationLicenses($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-license', [], $params);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationLicense($id, $organizationLicenseId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function createOrganizationLicense($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-license', $body, $params);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function updateOrganizationLicense($id, $organizationLicenseId, array $body = [], array $params = [])
    {
        return $this->api->send('PUT', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId, $body, $params);
    }

    /**
     * @param $id
     * @param $organizationLicenseId
     *
     * @return mixed|ResponseInterface
     */
    public function deleteOrganizationLicense($id, $organizationLicenseId)
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationLicenseUsers($id, $organizationLicenseId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId . '/relationships/' . User::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachOrganizationLicenseUser($id, $organizationLicenseId, array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId . '/relationships/' . User::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachOrganizationLicenseUser($id, $organizationLicenseId, array $body = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId . '/relationships/' . User::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationLicenseBoards($id, $organizationLicenseId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId . '/relationships/' . Board::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachOrganizationLicenseBoard($id, $organizationLicenseId, array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId . '/relationships/' . Board::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachOrganizationLicenseBoard($id, $organizationLicenseId, array $body = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId . '/relationships/' . Board::RESOURCE_KEY, $body);
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

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function searchUsers($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY . '/search', $body, $params);
    }

    /**
     * @param       $id
     * @param       $userId
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function changeRole($id, $userId, array $body = [], array $params = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY . '/' . $userId . '/change-role', $body, $params);
    }
}
