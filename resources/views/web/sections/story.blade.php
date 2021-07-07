@extends('web.layout')

@section('title', 'Historia')

@section('content')

@include('web.sections.static.cover', [
    'section' => 'Historia',
    'wallpaper' => 'story.jpg'
])

historia

@endsection