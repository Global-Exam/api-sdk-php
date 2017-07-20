<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ExamQuestionMedia
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestionMedia
{
    use Resource;

    const RESOURCE_KEY = 'exam-question-media';

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
