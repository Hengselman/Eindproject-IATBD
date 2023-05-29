@extends('default')

@section('title')
{{$user->name}}
@endsection

@section('content')
    @if ($user == $currentUser)
        @include('users.assets.usersCard--profile')
    @endif
    @include('users.assets.usersCard--show')
    @if (count($huisdier) > 0)
    <h2 class="usersCard__huisdierenH2">Alle huisdieren van {{$user->name}}:</h2>
    @endif
    @foreach($huisdier as $huisdier)
        @include('users.assets.usersCard--huisdieren')
    @endforeach
@endsection