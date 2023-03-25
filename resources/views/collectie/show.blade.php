@extends('default')

@section('title')
{{$huisdier->name}}
@endsection

@section('content')
    @include('collectie.assets.huisdierCard--show')
@endsection