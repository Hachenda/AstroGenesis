@extends('layouts.game')

@section('title', __('web.title'))

@section('content')
    <h1>{{__('home.title')}}</h1>
    <h1>{{auth()->user()}}</h1>
@endsection
