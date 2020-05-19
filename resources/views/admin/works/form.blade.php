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

    @formField('medias',[
        'name' => 'line_photo',
        'label' => 'Фон для вида линии-строки',
    ])

    @formField('medias',[
        'name' => 'logo',
        'label' => 'Логотип',
    ])

    @formField('input', [
        'name' => 'line_classes',
        'label' => 'Классы для вида линии-строки',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'next_classes',
        'label' => 'Классы для блока следующей работы',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'page_classes',
        'label' => 'Классы для body страницы работы',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'page_background',
        'label' => 'Background для body страницы работы',
        'maxlength' => 200
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

    @formField('block_editor')
@stop
