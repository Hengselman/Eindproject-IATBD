<article class="huisdierCard a-popup">
    <header class="huisdierCard__header">
        <a class="huisdierCard__back" href="/collectie"><button class="huisdierCard__button">Terug naar collectie.</button></a>
        <h1 class="huisdierCard__title">{{$huisdier->name}}</h1>
        @if($user->role == 'Admin')
        <button type="submit" class="huisdierCard__button">
            <a href="{{ route('collectie.index') }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{$huisdier->id}}').submit();">Verwijder huisdier</a>
        </button>
        <form id="delete-form-{{$huisdier->id}}" + action="{{route('collectie.destroy', $huisdier->id)}}" method="post">
            @csrf
            @method('DELETE')
        </form>
        @endif
    </header>
    <figure class="huisdierCard__figure">
        <img class="huisdierCard__image" src="{{$huisdier->image}}" alt="{{$huisdier->name . " " . $huisdier->soort}}">
    </figure>
    <section class="huisdierCard__sectionText">
        <p class="huisdierCard__text">{{$huisdier->description}}</p>
    </section>
    <section class="huisdierCard__sectionButton">
        <form action="{{ route('aanmeldingen.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::id() }}">
            <input type="hidden" name="huisdier_id" value="{{ $huisdier->id }}">
            <button type="submit" class="huisdierCard__button huisdierCard__oppassen">Ik wil graag oppassen!</button>
        </form>
        <a href="/users/{{$huisdier->eigenaar_id}}"><button class="huisdierCard__button huisdierCard__baasje">Ontmoet het baasje!</button></a>
    </section>
</article>