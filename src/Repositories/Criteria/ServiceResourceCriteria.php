<?php

namespace Litecms\Service\Repositories\Criteria;

use Litepie\Repository\Contracts\CriteriaInterface;
use Litepie\Repository\Contracts\RepositoryInterface;

class ServiceResourceCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        
        return $model;
    }
}