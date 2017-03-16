<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Blog\BlogCategory;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPost;
use GlobalExam\Api\Sdk\Resource\Blog\BlogPostSlugHistory;
use GlobalExam\Api\Sdk\Resource\Coupon\Coupon;

/**
 * Class CouponModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait CouponModule
{
    /**
     * @return Coupon
     */
    public function coupon()
    {
        return new Coupon($this);
    }
}
