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
    public function getHeaders();

    /**
     * @param array $headers
     *
     * @return mixed
     */
    public function setHeaders(array $headers = []);
}
