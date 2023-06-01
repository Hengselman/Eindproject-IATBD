<li class="a-bigger u-list-none huisdierGridCard">
    <a href="/users/{{$user->id}}">
        <article>
            <header class="huisdierGridCard__header u-flex-v-center">
                <h2 class="huisdierGridCard__heading"> {{$user->name}}</h2>
            </header>
            <figure class="huisdierGridCard__figure">
                <img class="huisdierGridCard__image" src="{{ asset('storage/').'/'.$user->profile_image}}" alt="{{$user->name}}">
            </figure>
        </article>
    </a>
</li>