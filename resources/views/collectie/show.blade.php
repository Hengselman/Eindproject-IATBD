@extends('default')

@section('title')
{{$huisdier->name}}
@endsection

@section('content')
    @include('collectie.assets.huisdierCard--show')

    @include('collectie.assets.huisdierCard--postReview')

    <h2 class="usersCard__huisdierenH2">Alle reviews over {{$huisdier->name}}:</h2>
    
    @if ($reviews->isEmpty())
    <p class="u-text-center">Wees de eerste die een review achterlaat!</p>
    @else
        @foreach($reviews as $review)
            @include('collectie.assets.huisdierCard--review')
        @endforeach
    @endif

@endsection

