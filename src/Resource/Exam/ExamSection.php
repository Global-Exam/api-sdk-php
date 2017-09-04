<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ExamSection
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamSection
{
    use Resource;

    const RESOURCE_KEY = 'exam-section';

    /**
     * ExamSection constructor.
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
    public function getExamExercises($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . ExamExercise::RESOURCE_KEY, [], $params);
    }
}
