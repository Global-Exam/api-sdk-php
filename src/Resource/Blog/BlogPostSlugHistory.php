<?php

namespace GlobalExam\Api\Sdk\Resource\Blog;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class BlogPostSlugHistory
 * @package GlobalExam\Api\Sdk\Resource\Blog
 */
class BlogPostSlugHistory
{
    use Resource;

    const RESOURCE_KEY = 'blog-post-slug-history';

    /**
     * BlogPost constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}
