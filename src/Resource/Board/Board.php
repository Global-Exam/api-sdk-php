<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Board
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class Board
{
    use Resource;

    const RESOURCE_KEY = 'board';

    /**
     * Board constructor.
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
    public function getBoardExamMocks($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . BoardExamMock::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardLevels($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . BoardLevel::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardTrainings($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . BoardTraining::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function duplicate($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/duplicate', $body, $params);
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
}
