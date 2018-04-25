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
class BoardContent
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
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getExport(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/content/export', $body, $params);
    }
}
