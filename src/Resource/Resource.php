<?php

namespace GlobalExam\Api\Sdk\Resource;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\AuthorizationCodeGrant;
use GlobalExam\Api\Sdk\Authentication\OAuthClient;
use Psr\Http\Message\ResponseInterface;

trait Resource
{
    /**
     * @var Api
     */
    private $api;

    /**
     * @param $parentId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getAll($parentId, array $params = [])
    {
        return json_decode($this->api->send(
            'GET',
            static::PARENT_RESOURCE_KEY . '/' . $parentId . '/' . static::RESOURCE_KEY,
            [],
            $params
        )->getBody()->getContents(), true);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOne($id, array $params = [])
    {
        return json_decode($this->api->send('GET', static::RESOURCE_KEY . '/' . $id, [],
            $params)->getBody()->getContents(), true);
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

    public function setAuthorization(Api $api)
    {
        $this->api = $api;
        $this->api->login();
    }
}
