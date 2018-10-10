<?php

namespace Litecms\Service\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Service\Interfaces\ServiceRepositoryInterface;

class ServicePublicController extends BaseController
{
    // use ServiceWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Service\Interfaces\ServiceRepositoryInterface $service
     *
     * @return type
     */
    public function __construct(ServiceRepositoryInterface $service)
    {
        $this->repository = $service;
        parent::__construct();
    }

    /**
     * Show service's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $services = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate(9);


        return $this->response->title(trans('service::service.names'))
            ->view('service::public.service.index')
            ->data(compact('services'))
            ->output();
    }

    /**
     * Show service's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $services = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('service::service.names'))
            ->view('service::public.service.index')
            ->data(compact('services'))
            ->output();
    }

    /**
     * Show service.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $service = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title(trans('service::service.name'))
            ->view('service::public.service.show')
            ->data(compact('service'))
            ->output();
    }

}
