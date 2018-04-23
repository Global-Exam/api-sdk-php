<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\Board;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationLicensePayment;
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteOrganizationGroup($id, $organizationGroupId)
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId);
    }

    /**
     * @param int   $id
     * @param int   $organizationGroupId
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrganizationGroupStatsExport(int $id, int $organizationGroupId, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/organization-group/' . $organizationGroupId . '/stats/export', $body, $params);
    }

    /**
     * @param       $id
     * @param       $organizationGroupId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrganizationLicense($id, $organizationLicenseId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrganizationLicensePayments($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . OrganizationLicensePayment::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param       $organizationLicensePaymentId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrganizationLicensePayment($id, $organizationLicensePaymentId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . OrganizationLicensePayment::RESOURCE_KEY . '/' . $organizationLicensePaymentId, [], $params);
    }

    /**
     * @param       $id
     * @param       $organizationLicensePaymentId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrganizationLicensePaymentInvoice($id, $organizationLicensePaymentId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . OrganizationLicensePayment::RESOURCE_KEY . '/' . $organizationLicensePaymentId . '/invoice', [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrganizationSeats($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/organization-seat', [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderOrganizationSeat($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-seat/order', $body, $params);
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function assignOneOrganizationSeat($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-seat/assign-one', $body, $params);
    }

    /**
     * @param       $id
     * @param       $file
     * @param array $data
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function assignMultipleOrganizationSeat($id, $file, array $data = [])
    {
        $body = [
            [
                'name'     => 'file',
                'contents' => $file,
            ],
        ];

        return $this->api->sendFile('POST', self::RESOURCE_KEY . '/' . $id . '/organization-seat/assign-multiple', array_merge($body, $data));
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteOrganizationLicense($id, $organizationLicenseId)
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/organization-license/' . $organizationLicenseId);
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchOrganizationLicense($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/organization-license/search', $body, $params);
    }

    /**
     * @param       $id
     * @param       $organizationLicenseId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function changeRole($id, $userId, array $body = [], array $params = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY . '/' . $userId . '/change-role', $body, $params);
    }

    /**
     * @param       $id
     * @param       $userId
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateUser($id, $userId, array $body = [], array $params = [])
    {
        return $this->api->send('PUT', self::RESOURCE_KEY . '/' . $id . '/' . User::RESOURCE_KEY . '/' . $userId, $body, $params);
    }
}
