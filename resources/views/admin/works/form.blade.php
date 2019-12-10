@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('medias',[
        'name' => 'cover',
        'label' => 'Cover',
    ])

    @formField('block_editor', [
        'blocks' => ['quote']
    ])
@stop
