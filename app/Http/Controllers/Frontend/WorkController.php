<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\View\View;


class WorkController
{
    public function index() {
        $works = Work::where('published', true)->ordered()->get();
        return view('welcome', ['works' => $works]);
    }

    /**
     * @param  string $slug
     * @return View
     */
    public function show($slug)
    {
        $work = Work::forSlug($slug)->with('blocks')->first();
        $renderedBlocks = $work->renderBlocks(true, [
            'quote' => 'blocks/quote'
        ]);

        return view('work', [
            'work' => $work,
            'renderedBlocks' => $renderedBlocks
        ]);
    }
}
