<?php

namespace Litecms\Service\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class ServicePresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ServiceTransformer();
    }
}