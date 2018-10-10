<?php

namespace Litecms\Service;

use User;

class Service
{
    /**
     * $service object.
     */
    protected $service;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Service\Interfaces\ServiceRepositoryInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Returns count of service.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.service.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->service->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\ServiceUserCriteria());
        }

        $service = $this->service->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('service::' . $view, compact('service'))->render();
    }
}
