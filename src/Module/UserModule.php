<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\User\Auth;
use GlobalExam\Api\Sdk\Resource\User\OAuth;
use GlobalExam\Api\Sdk\Resource\User\User;
use GlobalExam\Api\Sdk\Resource\User\UserPlan;
use GlobalExam\Api\Sdk\Resource\User\UserPlanPeriod;
use GlobalExam\Api\Sdk\Resource\User\UserProvider;
use GlobalExam\Api\Sdk\Resource\User\UserRole;

/**
 * Class UserModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait UserModule
{
    /**
     * @return Auth
     */
    public function auth()
    {
        return new Auth($this);
    }

    /**
     * @return OAuth
     */
    public function oauth()
    {
        return new OAuth($this);
    }

    /**
     * @return User
     */
    public function user()
    {
        return new User($this);
    }

    /**
     * @return UserPlan
     */
    public function userPlan()
    {
        return new UserPlan($this);
    }

    /**
     * @return UserPlanPeriod
     */
    public function userPlanPeriod()
    {
        return new UserPlanPeriod($this);
    }

    /**
     * @return UserProvider
     */
    public function userProvider()
    {
        return new UserProvider($this);
    }

    /**
     * @return UserRole
     */
    public function userRole()
    {
        return new UserRole($this);
    }
}
