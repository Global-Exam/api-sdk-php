<?php

namespace GlobalExam\Api\Sdk\Resource\Blog;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Exam\Exam;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\Skill\Skill;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BlogPost
 *
 * @package GlobalExam\Api\Sdk\Resource\Blog
 */
class BlogPost
{
    use Resource;

    const RESOURCE_KEY = 'blog-post';

    /**
     * BlogPost constructor.
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
    public function getExams($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Exam::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncExam($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Exam::RESOURCE_KEY, $body);
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
