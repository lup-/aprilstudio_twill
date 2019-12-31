@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('medias',[
        'name' => 'photo',
        'label' => 'Photo',
    ])
@stop
