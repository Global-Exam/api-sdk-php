<?php

namespace GlobalExam\Api\Sdk\Resource\Blog;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class BlogPostStatus
 *
 * @package GlobalExam\Api\Sdk\Resource\Blog
 */
class BlogPostStatus
{
    use Resource;

    const RESOURCE_KEY = 'blog-post-status';

    /**
     * BlogPostStatus constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
