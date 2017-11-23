<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrganizationStats
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationStats
{
    use Resource;

    const RESOURCE_KEY = 'organization';

    /**
     * OrganizationStats constructor.
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
     */
    public function getLogin(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/login', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getLoginExport(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/login/export', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getGlobal(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/global', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getGlobalExport(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/global/export', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getTraining(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/training', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getTrainingExport(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/training/export', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getExam(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/exam', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getExamExport(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/exam/export', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getSkill(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/skill', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getSkillExport(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/stats/skill/export', $body, $params);
    }
}
