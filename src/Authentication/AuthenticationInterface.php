<?php namespace GlobalExam\Api\Sdk\Authentication;

interface AuthenticationInterface
{
    /**
     * @return mixed
     */
    public function getOAuthClient();

    /**
     * @return string
     */
    public function getScope();

    /**
     * @return array
     */
    public function getMeta();

    /**
     * @return mixed
     */
    public function getHeaders();
}
