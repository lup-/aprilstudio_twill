<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Work;

class WorkRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles;

    public function __construct(Work $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateBrowser($object, $fields, 'designers');
        $this->updateBrowser($object, $fields, 'categories');
        $this->updateBrowser($object, $fields, 'areas');
        $this->updateBrowser($object, $fields, 'types');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields['browsers']['designers'] = $this->getFormFieldsForBrowser($object, 'designers');
        $fields['browsers']['categories'] = $this->getFormFieldsForBrowser($object, 'categories');
        $fields['browsers']['areas'] = $this->getFormFieldsForBrowser($object, 'areas');
        $fields['browsers']['types'] = $this->getFormFieldsForBrowser($object, 'types');
        return $fields;
    }
}
