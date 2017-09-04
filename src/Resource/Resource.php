<?php

namespace GlobalExam\Api\Sdk\Resource;

use GlobalExam\Api\Sdk\Api;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Resource
 *
 * @package GlobalExam\Api\Sdk\Resource
 */
trait Resource
{
    /**
     * @var Api
     */
    private $api;

    /**
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getAll(array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOne($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id, [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function create(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function update($id, array $body = [])
    {
        return $this->api->send('PUT', static::RESOURCE_KEY . '/' . $id, $body);
    }

    /**
     * @param $id
     *
     * @return mixed|ResponseInterface
     */
    public function delete($id)
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachLanguage($id, array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/relationships/language', $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncLanguage($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/language', $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachLanguage($id, array $body = [])
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id . '/relationships/language', $body);
    }
}
