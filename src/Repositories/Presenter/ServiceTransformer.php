<?php

namespace Litecms\Service\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class ServiceTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Service\Models\Service $service)
    {
        return [
            'id'                => $service->getRouteKey(),
            'key'               => [
                'public'    => $service->getPublicKey(),
                'route'     => $service->getRouteKey(),
            ], 
            'title'             => $service->title,
            'icon'              => $service->icon,
            'heading'           => $service->heading,
            'description'       => $service->description,
            'image'             => $service->image,
            'slug'              => $service->slug,
            'created_at'        => $service->created_at,
            'updated_at'        => $service->updated_at,
            'deleted_at'        => $service->deleted_at,
            'url'               => [
                'public'    => trans_url('service/'.$service->getPublicKey()),
                'user'      => guard_url('service/service/'.$service->getRouteKey()),
            ], 
            'status'            => trans('app.'.$service->status),
            'created_at'        => format_date($service->created_at),
            'updated_at'        => format_date($service->updated_at),
        ];
    }
}