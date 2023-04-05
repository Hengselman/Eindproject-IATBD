<article class="huisdierCard a-popup">
    <h1 class="huisdierCard__title">{{$huisdier->name}}</h1>
    <a class="huisdierCard__back_to_home" href="/collectie">Terug naar home pagina.</a>
    <figure class="huisdierCard__figure">
        <img class="huisdierCard__image" src="{{$huisdier->image}}" alt="{{$huisdier->name . " " . $huisdier->soort}}">
    </figure>
    <section class="huisdierCard__text">
        <p>{{$huisdier->description}}</p>
    </section>
    <button class="huisdierCard__button huisdierCard__oppassen" onclick="oppassenButton()">Ik wil graag oppassen!</button>
    <a href="/users/{{$huisdier->eigenaar_id}}"><button class="huisdierCard__button huisdierCard__baasje">Ontmoet het baasje!</button></a>
</article>