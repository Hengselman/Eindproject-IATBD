@extends('default')

@section('title')
{{$user->name}}
@endsection

@section('content')
    @include('users.assets.usersCard--show')
    <h2 class="usersCard__huisdierenH2">Alle huisdieren van {{$user->name}}:</h2>
    @foreach($huisdier as $huisdier)
        @include('users.assets.usersCard--huisdieren')
    @endforeach
@endsection