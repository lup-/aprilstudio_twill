<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Designer;

class DesignerRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleMedias, HandleFiles;

    public function __construct(Designer $model)
    {
        $this->model = $model;
    }
}
