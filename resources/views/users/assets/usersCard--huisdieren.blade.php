<a class="usersCard__huisdierCard--link u-text-dec-none" href="/collectie/{{$huisdier->id}}">
    <section class="usersCard__huisdierCard">
    <figure class="usersCard__huisdierFigure"><img class="usersCard__huisdierImage" src="{{ asset('storage/').'/'.$huisdier->image}}" alt=""></figure>
        <h3 class="usersCard__huisdierName">{{$huisdier->name}}</h3>
        <p class="usersCard__huisdierDescription">{{$huisdier->description}}</p>
        @if($huisdier->zoekt_oppas === 1)
            <button class="usersCard__huisdierButton button__True">Zoekt oppas</button>
        @else
            <button class="usersCard__huisdierButton button__False">Zoekt geen oppas</button>
        @endif
    </section>
</a>