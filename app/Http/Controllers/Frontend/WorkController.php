<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Work;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;

class WorkController
{
    public function index() {
        $works = Work::where('published', true)
                     ->whereHas('slugs', function (Builder $query) {
                            $query
                                ->where('locale', '=', app()->getLocale())
                                ->where('active', '=', 1);
                        })
                     ->ordered()
                     ->get();
        $works_array_of_models = [];
        foreach ($works as $work) {
            $works_array_of_models[] = $work;
        }
        $work_chunks = array_chunk($works_array_of_models, 5);

        return view('welcome', [
            'works'       => $works,
            'work_chunks' => $work_chunks,
        ]);
    }

    /**
     * @param  string $slug
     * @return View
     */
    public function show($slug)
    {
        $work = Work::forSlug($slug)->with('blocks')->first();
        $renderedBlocks = $work->renderBlocks(false, [
            'quote'            => 'blocks/quote',
            'full_width_image' => 'blocks/full_width_image',
            'fixed_image_grid' => 'blocks/fixed_image_grid',
            'fluid_image_grid' => 'blocks/fluid_image_grid'
        ]);

        return view('work', [
            'work'           => $work,
            'renderedBlocks' => $renderedBlocks,
        ]);
    }
}
