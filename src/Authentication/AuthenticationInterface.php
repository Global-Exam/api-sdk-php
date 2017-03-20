<?php
namespace GlobalExam\Api\Sdk\Authentication;

interface AuthenticationInterface
{
    /**
     * @return string
     */
    public function getGrantType();

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
     * @return array
     */
    public function getHeaders();
}
