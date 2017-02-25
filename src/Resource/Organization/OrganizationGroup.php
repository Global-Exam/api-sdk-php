<?php namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Organization
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationGroup
{
    const RESOURCE_KEY = 'organization-group';

    /**
     * @var
     */
    private $api;

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
    public function getAll(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOne($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id, [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function create(array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function update($id, array $body = [])
    {
        return $this->api->send('PUT', self::RESOURCE_KEY . '/' . $id, $body);
    }

    /**
     * @param $id
     *
     * @return mixed|ResponseInterface
     */
    public function delete($id)
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncUser($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/relationships/user', $body);
    }
}
