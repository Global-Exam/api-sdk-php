<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserRole
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserRole
{
    const RESOURCE_KEY = 'user-role';

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
     * @param       $code
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOne($code, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $code, [], $params);
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
     * @param       $code
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function update($code, array $body = [])
    {
        return $this->api->send('PUT', self::RESOURCE_KEY . '/' . $code, $body);
    }

    /**
     * @param $code
     *
     * @return mixed|ResponseInterface
     */
    public function delete($code)
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $code);
    }
}
