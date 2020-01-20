<?php
namespace App\Http\Controllers\Frontend;

use A17\Twill\Models\Model;
use App\Models\Area;

class AreaController extends GroupController
{
    /**
     * @param string $slug
     * @return Model
     */
    protected function getModel($slug) {
        return Area::forSlug($slug)->first();
    }
}
