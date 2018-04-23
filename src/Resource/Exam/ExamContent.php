<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ExamContent
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamContent
{
    use Resource;

    const RESOURCE_KEY = 'exam';

    /**
     * ExamContent constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param int   $id
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function getExport(int $id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/content/export', $params);
    }
}
