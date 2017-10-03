<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Blog\BlogCategory;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPost;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPostSlugHistory;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPostStatus;

/**
 * Class BlogModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait BlogModule
{
    /**
     * @return BlogCategory
     */
    public function blogCategory()
    {
        return new BlogCategory($this);
    }

    /**
     * @return BlogPost
     */
    public function blogPost()
    {
        return new BlogPost($this);
    }

    /**
     * @return BlogPostSlugHistory
     */
    public function blogPostSlugHistory()
    {
        return new BlogPostSlugHistory($this);
    }

    /**
     * @return BlogPostStatus
     */
    public function blogPostStatus()
    {
        return new BlogPostStatus($this);
    }
}
