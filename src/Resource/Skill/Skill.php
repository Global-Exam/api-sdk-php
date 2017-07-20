<?php

namespace GlobalExam\Api\Sdk\Resource\Skill;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPost;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestion;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Skill
 *
 * @package GlobalExam\Api\Sdk\Resource\Country
 */
class Skill
{
    use Resource;

    const RESOURCE_KEY = 'skill';

    /**
     * Skill constructor.
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
    public function syncLanguage($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/language', $body);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBlogPosts($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . BlogPost::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getExamQuestions($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . ExamQuestion::RESOURCE_KEY, [], $params);
    }
}
