<?php

namespace Litecms\Service\Repositories\Eloquent;

use Litecms\Service\Interfaces\ServiceRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.service.service.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.service.service.model.model');
    }
}
