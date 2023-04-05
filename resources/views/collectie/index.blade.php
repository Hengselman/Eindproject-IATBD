@extends('default')

@section('title')
{{"Alle huisdieren"}}
@endsection

@section('content')
@include('collectie.assets.huisdierCard--filter')
<ul class="u-grid-1 huisdierGridCard__container">
    @foreach($huisdier as $huisdier)
        @include('collectie.assets.huisdierCard--index')
    @endforeach
</ul>
@endsection