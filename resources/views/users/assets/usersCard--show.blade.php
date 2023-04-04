<article class="usersCard a-popup">
    <h1 class="usersCard__title">{{$user->name}}</h1>
    <h2 class="usersCard__oppasCheck">Heeft oppas nodig!</h2>
    <figure class="usersCard__figure">
        <img class="usersCard__image" src="{{$user->house_image}}" alt="{{$user->name}} . 's mooie huis!">
    </figure>
    <section class="usersCard__houseText">
        <p>{{$user->house_description}}</p>
    </section>
    @foreach
        <section class="usersCard__petText">
            <h3 class="usersCard__petName">{{$huisdier->name}}</h3>
            <p class="usersCard__petDescription">{{$huisdier->description}}</p>
            <p class="usersCard__prices"></p>
        </section>
    @endforeach
</article>