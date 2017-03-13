<?php namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrganizationBusinessType
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationBusinessType
{
    use Resource;

    const RESOURCE_KEY = 'organization-business-type';

    /**
     * OrganizationBusinessType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
