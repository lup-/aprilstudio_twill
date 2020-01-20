<?php
namespace App\Http\Controllers\Frontend;

use A17\Twill\Models\Model;
use App\Models\Category;

class CategoryController extends GroupController
{
    /**
     * @param string $slug
     * @return Model
     */
    protected function getModel($slug) {
        return Category::forSlug($slug)->first();
    }
}
