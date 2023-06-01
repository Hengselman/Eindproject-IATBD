<li class="a-bigger u-list-none huisdierGridCard a-popup" data-huisdier-soort="{{$huisdier->soort}}">
    <a href="/collectie/{{$huisdier->id}}">
        <article>
            <header class="huisdierGridCard__header u-flex-v-center">
                <h2 class="huisdierGridCard__heading"> {{$huisdier->name}}</h2>
            </header>
            <figure class="huisdierGridCard__figure">
                <img class="huisdierGridCard__image" src="{{ asset('storage/').'/'.$huisdier->image}}" alt="{{$huisdier->name}} de {{$huisdier->soort}}">
            </figure>
            <section class="huisdierGridCard__textSection">
                <p class="huisdierGridCard__text"> {{$huisdier->description}}</p>
            </section>
        </article>
    </a>
</li>