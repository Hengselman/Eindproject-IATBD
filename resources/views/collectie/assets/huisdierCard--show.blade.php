<article class="huisdierCard a-popup">
    <h1 class="huisdierCard__title">{{$huisdier->name}}</h1>
    <figure class="huisdierCard__figure">
        <img class="huisdierCard__image" src="{{$huisdier->image}}" alt="{{$huisdier->name . " " . $huisdier->soort}}">
    </figure>
    <section class="huisdierCard__text">
        <p>{{$huisdier->description}}</p>
    </section>
    <section class="huisdierCard__btnSection">
        <button class="huisdierCard__button">Ik wil graag oppassen!</button>
        <a href="/users/{{$huisdier->eigenaar_id}}"><button class="huisdierCard__button">Ontmoet het baasje!</button></a>
        <a class="huisdierCard__back_to_home" href="/collectie">Terug naar home pagina.</a>
    </section>
</article>