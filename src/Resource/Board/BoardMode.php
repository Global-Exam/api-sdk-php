<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BoardMode
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardMode
{
    use Resource;

    const RESOURCE_KEY = 'board-mode';

    /**
     * BoardMode constructor.
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardSections($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . BoardSection::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardTrainings($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . BoardTraining::RESOURCE_KEY, [], $params);
    }
}
