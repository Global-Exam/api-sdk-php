<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ExamPart
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamPart
{
    use Resource;

    const RESOURCE_KEY = 'exam-part';

    /**
     * ExamPart constructor.
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
    public function getExamQuestions($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . ExamQuestion::RESOURCE_KEY, [], $params);
    }
}
