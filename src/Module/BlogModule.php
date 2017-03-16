<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Blog\BlogCategory;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPost;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPostSlugHistory;

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
}
