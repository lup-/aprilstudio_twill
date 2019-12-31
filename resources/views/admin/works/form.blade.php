@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('wysiwyg', [
        'name' => 'casestudy',
        'label' => 'Case Study Text',
        'translated' => true,
    ])

    @formField('medias',[
        'name' => 'cover',
        'label' => 'Cover',
    ])

    @formField('browser', [
        'moduleName' => 'designers',
        'name' => 'designers',
        'label' => 'Designers',
        'max' => 10,
    ])

    @formField('browser', [
        'moduleName' => 'categories',
        'name' => 'categories',
        'label' => 'Categories',
        'max' => 10,
    ])

    @formField('browser', [
        'moduleName' => 'areas',
        'name' => 'areas',
        'label' => 'Areas',
        'max' => 10,
    ])

    @formField('browser', [
        'moduleName' => 'types',
        'name' => 'types',
        'label' => 'Types',
        'max' => 10,
    ])

    @formField('block_editor', [
        'blocks' => ['quote', 'full_width_image', 'fixed_image_grid', 'fluid_image_grid']
    ])
@stop
