<?php
namespace App\Http\Controllers\Frontend;

use A17\Twill\Models\Model;
use App\Models\Work;
use Illuminate\View\View;

class GroupController {

    protected $chunkSize = 5;

    /**
     * @param string $slug
     * @return Model
     */
    protected function getModel($slug) {
        return Work::forSlug($slug)->with('blocks')->first();
    }

    protected function getListWorks(Model $model) {
        return $model
                    ->works()
                    ->with('blocks')
                    ->where(['published' => 1])
                    ->orderBy('created_at')
                    ->get();
    }

    /**
     * @param  string $slug
     * @return View
     */
    public function show($slug) {
        $titleModel = $this->getModel($slug);
        if (!$titleModel) {
            abort(404);
        }

        $works = $this->getListWorks($titleModel);

        $works_array_of_models = [];
        foreach ($works as $work) {
            $works_array_of_models[] = $work;
        }
        $work_chunks = array_chunk($works_array_of_models, $this->chunkSize);

        return view('list', [
            'title'       => $titleModel->title,
            'description' => $titleModel->description,
            'works'       => $works,
            'work_chunks' => $work_chunks,
        ]);
    }
}
