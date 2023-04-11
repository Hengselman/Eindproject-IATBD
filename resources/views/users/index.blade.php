@extends('default')

@section('title')
{{"Alle gebruikers"}}
@endsection

@section('content')
<ul class="u-grid-1 huisdierGridCard__container">
    @foreach($user as $user)
        @include('users.assets.usersCard--index')
    @endforeach
</ul>
@endsection