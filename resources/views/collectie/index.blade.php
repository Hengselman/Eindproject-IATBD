@extends('default')

@section('title')
{{"Alle huisdieren"}}
@endsection

@section('content')
<h1 class="huisdierGrid__counter">Zo'n {{count($huisdier)}} huisdieren zoeken een tijdelijk baasje!</h1>
@include('collectie.assets.huisdierCard--filter')
<ul class="u-grid-1 huisdierGridCard__container">
    @foreach($huisdier as $huisdier)
        @include('collectie.assets.huisdierCard--index')
    @endforeach
</ul>
@endsection