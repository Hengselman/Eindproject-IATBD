@extends('default')

@section('title')
{{"Alle huisdieren"}}
@endsection

@section('content')
<ul class="u-grid-1 huisdierGridCard__container">
    @foreach($huisdier as $huisdier)
        @include('collectie.assets.huisdierCard--index')
    @endforeach
</ul>
@endsection