<?php
namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\User\User;
use GlobalExam\Api\Sdk\Resource\User\UserProvider;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Organization
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class Organization
{
    use Resource;

    const RESOURCE_KEY = 'organization';

    /**
     * Organization constructor.
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
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncUserProvider($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/relationships/' . UserProvider::RESOURCE_KEY, $body);
    }
}
