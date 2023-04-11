<article class="usersCard a-popup">
    <section class="usersCard__header">
        <h1 class="usersCard__title">{{$user->name}}</h1>
    </section>
    <figure class="usersCard__figure">
        <img class="usersCard__image" src="{{ asset('storage/').'/'.$user->profile_image}}" alt="{{$user->name}}">
    </figure>
    <section class="usersCard__profileInfo">
        <p>{{$user->profile_info}}</p>
    </section>
</article>