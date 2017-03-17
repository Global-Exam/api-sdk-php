<?php
namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
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
     * @return mixed|ResponseInterface
     */
    public function logout()
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/logout');
    }
}
