<?php

namespace GlobalExam\Api\Sdk\Resource;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Language\Language;
use GlobalExam\Api\Sdk\Resource\Translation\Translation;
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function getOne($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id, [], $params);
    }

    /**
     * @param array $body
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function create(array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY, $body, $params);
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function update($id, array $body = [], array $params = [])
    {
        return $this->api->send('PUT', static::RESOURCE_KEY . '/' . $id, $body, $params);
    }

    /**
     * @param $id
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function attachLanguage($id, array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Language::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function detachLanguage($id, array $body = [])
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Language::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param       $languageCode
     * @param array $body
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createTranslation($id, $languageCode, array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/' . Translation::RESOURCE_KEY . '/' . $languageCode, $body);
    }

    /**
     * @param       $id
     * @param       $languageCode
     * @param array $body
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateTranslation($id, $languageCode, array $body = [])
    {
        return $this->api->send('PUT', static::RESOURCE_KEY . '/' . $id . '/' . Translation::RESOURCE_KEY . '/' . $languageCode, $body);
    }

    /**
     * @param $id
     * @param $languageCode
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteTranslation($id, $languageCode)
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id . '/' . Translation::RESOURCE_KEY . '/' . $languageCode);
    }
}
