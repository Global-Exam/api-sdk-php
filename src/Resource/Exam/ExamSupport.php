<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ExamSupport
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSupport
{
    use Resource;

    const RESOURCE_KEY = 'exam-support';

    /**
     * ExamSupport constructor.
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
    public function storeExamSupportMedia($id, $file)
    {
        return $this->api->sendFile('POST', static::RESOURCE_KEY . '/' . $id . '/exam-support-media', [
            [
                'name'     => 'media',
                'contents' => $file,
            ],
        ]);
    }

    /**
     * @param $id
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function deleteExamSupportMedia($id)
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id . '/exam-support-media');
    }
}
