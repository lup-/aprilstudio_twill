<?php

namespace App\Http\Controllers\Frontend;

use A17\Twill\Models\Model;
use App\Models\Designer;

class DesignerController extends GroupController
{
    /**
     * @param string $slug
     * @return Model
     */
    protected function getModel($slug) {
        return Designer::forSlug($slug)->first();
    }
}
