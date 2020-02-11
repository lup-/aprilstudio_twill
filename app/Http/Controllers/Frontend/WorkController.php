<?php

namespace App\Http\Controllers\Frontend;

use A17\Twill\Http\Controllers\Admin\ModuleController;
use App\Models\Work;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class WorkController
{
    private function getBucketWorks($bucket_key) {
        return Work::where('published', true)
                        ->whereHas('slugs', function (Builder $query) {
                            $query
                                ->where('locale', '=', app()->getLocale())
                                ->where('active', '=', 1);
                        })
                        ->fromBucket($bucket_key)
                        ->get();
    }

    private function chunkModelArray($models, $chunkSize) {
        $array_of_models = [];
        foreach ($models as $model) {
            $array_of_models[] = $model;
        }
        return array_chunk($array_of_models, $chunkSize);
    }

    public function index() {
        $favouritedWorks = $this->getBucketWorks('home_favourite_works');
        $otherWorks = $this->getBucketWorks('home_other_works');

        return view('site.welcome', [
            'favouriteWorks' => $this->chunkModelArray($favouritedWorks, 5),
            'otherWorks'     => $this->chunkModelArray($otherWorks, 5),
        ]);
    }

    /**
     * @param string $slug
     * @return View
     */
    public function show($lang, $slug) {
        $work = Work::forSlug($slug)->with('blocks')->withBucketPositions()->first();

        if (!$work) {
            abort(404);
        }

        return view('site.work', [
            'item'           => $work,
            'nextWork'       => $work->getNext(),
        ]);
    }
}
