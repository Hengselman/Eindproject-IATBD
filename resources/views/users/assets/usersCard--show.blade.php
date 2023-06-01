<article class="usersCard a-popup">
    <section class="usersCard__header">
        <h1 class="usersCard__title">{{$user->name}}</h1>
        @if($currentUser->role == 'Admin')
        <button type="submit" class="huisdierCard__button">
            <a class="u-text-dec-none" href="{{ route('users.index') }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{$user->id}}').submit();">Verwijder gebruiker</a>
        </button>
        <form id="delete-form-{{$user->id}}" + action="{{route('users.destroy', $user->id)}}" method="post">
            @csrf
            @method('DELETE')
        </form>
        @endif
    </section>
    <figure class="usersCard__figure">
        <img class="usersCard__image" src="{{ asset('storage/').'/'.$user->profile_image}}" alt="{{$user->name}}">
    </figure>
    <section class="usersCard__profileInfo">
        <p>{{$user->profile_info}}</p>
    </section>
</article>