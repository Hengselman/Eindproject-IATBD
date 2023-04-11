<article class="huisdierCard a-popup">
    <header class="huisdierCard__header">
        <h1 class="huisdierCard__title">{{$huisdier->name}}</h1>
        <a class="huisdierCard__back" href="/collectie">Terug naar home pagina.</a>
    </header>
    <figure class="huisdierCard__figure">
        <img class="huisdierCard__image" src="{{$huisdier->image}}" alt="{{$huisdier->name . " " . $huisdier->soort}}">
    </figure>
    <section class="huisdierCard__sectionText">
        <p class="huisdierCard__text">{{$huisdier->description}}</p>
    </section>
    <section class="huisdierCard__sectionButton">
        <button class="huisdierCard__button huisdierCard__oppassen" onclick="oppassenButton()">Ik wil graag oppassen!</button>
        <a href="/users/{{$huisdier->eigenaar_id}}"><button class="huisdierCard__button huisdierCard__baasje">Ontmoet het baasje!</button></a>
    </section>
</article>