<?php

namespace App\Repository\Presenters;

use App\Repository\Transformers\MenuTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MenuPresenter
 *
 * @package namespace App\Repository\Presenters;
 */
class MenuPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MenuTransformer();
    }
}
