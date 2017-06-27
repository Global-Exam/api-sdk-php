<?php

namespace GlobalExam\Api\Sdk\Resource\Exam;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\Skill\Skill;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ExamQuestion
 *
 * @package GlobalExam\Api\Sdk\Resource\Exam
 */
class ExamQuestion
{
    use Resource;

    const RESOURCE_KEY = 'exam-question';

    /**
     * ExamQuestion constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncSkill($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Skill::RESOURCE_KEY, $body);
    }
}
