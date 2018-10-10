<?php

namespace Litecms\Service\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Service\Models\Service;

class ServicePolicy
{

    /**
     * Determine if the given user can view the service.
     *
     * @param UserPolicy $user
     * @param Service $service
     *
     * @return bool
     */
    public function view(UserPolicy $user, Service $service)
    {
        if ($user->canDo('service.service.view') && $user->isAdmin()) {
            return true;
        }

        return $service->user_id == user_id() && $service->user_type == user_type();
    }

    /**
     * Determine if the given user can create a service.
     *
     * @param UserPolicy $user
     * @param Service $service
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('service.service.create');
    }

    /**
     * Determine if the given user can update the given service.
     *
     * @param UserPolicy $user
     * @param Service $service
     *
     * @return bool
     */
    public function update(UserPolicy $user, Service $service)
    {
        if ($user->canDo('service.service.edit') && $user->isAdmin()) {
            return true;
        }

        return $service->user_id == user_id() && $service->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given service.
     *
     * @param UserPolicy $user
     * @param Service $service
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Service $service)
    {
        return $service->user_id == user_id() && $service->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given service.
     *
     * @param UserPolicy $user
     * @param Service $service
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Service $service)
    {
        if ($user->canDo('service.service.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given service.
     *
     * @param UserPolicy $user
     * @param Service $service
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Service $service)
    {
        if ($user->canDo('service.service.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
