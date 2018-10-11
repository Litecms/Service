<?php

namespace Litecms\Service\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\Service\Http\Requests\ServiceRequest;
use Litecms\Service\Interfaces\ServiceRepositoryInterface;
use Litecms\Service\Models\Service;

/**
 * Resource controller class for service.
 */
class ServiceResourceController extends BaseController
{

    /**
     * Initialize service resource controller.
     *
     * @param type ServiceRepositoryInterface $service
     *
     * @return null
     */
    public function __construct(ServiceRepositoryInterface $service)
    {
        parent::__construct();
        $this->repository = $service;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\Service\Repositories\Criteria\ServiceResourceCriteria::class);
    }

    /**
     * Display a list of service.
     *
     * @return Response
     */
    public function index(ServiceRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\Service\Repositories\Presenter\ServicePresenter::class)
                ->$function();
        }

        $services = $this->repository->paginate();

        return $this->response->setMetaTitle(trans('service::service.names'))
            ->view('service::service.index', true)
            ->data(compact('services'))
            ->output();
    }

    /**
     * Display service.
     *
     * @param Request $request
     * @param Model   $service
     *
     * @return Response
     */
    public function show(ServiceRequest $request, Service $service)
    {

        if ($service->exists) {
            $view = 'service::service.show';
        } else {
            $view = 'service::service.new';
        }

        return $this->response->setMetaTitle(trans('app.view') . ' ' . trans('service::service.name'))
            ->data(compact('service'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new service.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ServiceRequest $request)
    {

        $service = $this->repository->newInstance([]);
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('service::service.name')) 
            ->view('service::service.create', true) 
            ->data(compact('service'))
            ->output();
    }

    /**
     * Create new service.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ServiceRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $service                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('service::service.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('service/service/' . $service->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/service/service'))
                ->redirect();
        }

    }

    /**
     * Show service for editing.
     *
     * @param Request $request
     * @param Model   $service
     *
     * @return Response
     */
    public function edit(ServiceRequest $request, Service $service)
    {
        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('service::service.name'))
            ->view('service::service.edit', true)
            ->data(compact('service'))
            ->output();
    }

    /**
     * Update the service.
     *
     * @param Request $request
     * @param Model   $service
     *
     * @return Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        try {
            $attributes = $request->all();

            $service->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('service::service.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('service/service/' . $service->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('service/service/' . $service->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the service.
     *
     * @param Model   $service
     *
     * @return Response
     */
    public function destroy(ServiceRequest $request, Service $service)
    {
        try {

            $service->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('service::service.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('service/service/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('service/service/' . $service->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple service.
     *
     * @param Model   $service
     *
     * @return Response
     */
    public function delete(ServiceRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('service::service.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('service/service'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/service/service'))
                ->redirect();
        }

    }

    /**
     * Restore deleted services.
     *
     * @param Model   $service
     *
     * @return Response
     */
    public function restore(ServiceRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('service::service.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/service/service'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/service/service/'))
                ->redirect();
        }

    }

}
