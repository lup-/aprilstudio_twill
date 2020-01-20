<?php
namespace App\Http\Controllers\Frontend;

use A17\Twill\Models\Model;
use App\Models\Type;

class TypeController extends GroupController
{
    /**
     * @param string $slug
     * @return Model
     */
    protected function getModel($slug) {
        return Type::forSlug($slug)->first();
    }
}
