<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use Psr\Http\Message\ResponseInterface;

/**
 * Class User
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class User
{
    const RESOURCE_KEY = 'user';

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
     * @return Auth
     */
    public function auth()
    {
        return new Auth($this->api);
    }

    /**
     * @return OAuth
     */
    public function oauth()
    {
        return new OAuth($this->api);
    }

    /**
     * @return UserRole
     */
    public function userRole()
    {
        return new UserRole($this->api);
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function me()
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/me');
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
