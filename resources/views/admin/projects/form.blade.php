@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Description',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'placeholder' => 'Project text...',
    'editSource' => true,
    'note' => 'Hint message',
    ])
@stop
