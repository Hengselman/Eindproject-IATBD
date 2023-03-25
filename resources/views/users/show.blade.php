@extends('default')

@section('title')
{{$user->name}}
@endsection

@section('content')
    @include('users.assets.usersCard--show')
@endsection