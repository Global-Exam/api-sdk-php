<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ExamAnswerMedia
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamAnswerMedia
{
    use Resource;

    const RESOURCE_KEY = 'exam-answer-media';

    /**
     * ExamQuestionMedia constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param $id
     * @param $file
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function upload($id, $file)
    {
        return $this->api->sendFile('POST', static::RESOURCE_KEY . '/' . $id . '/upload', [
            [
                'name'     => 'media',
                'contents' => $file,
            ],
        ]);
    }
}
