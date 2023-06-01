<section class="filter__wrapper">
    <section class="filter__option">
        <form action="{{ route('logout') }}" method="POST">
            <button type="submit" class="huisdierCard__button usersCard__logout">
                <a class="u-text-dec-none" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Uitloggen</a>
            </button>    
            @csrf
        </form>
    </section>
    <section class="filter__option">
        @if($user->role == 'Admin')
        <button class="huisdierCard__button usersCard__logout">
            <a class="u-text-dec-none" href="{{ route('users.index') }}">Gebruikerslijst</a>
        </button>
        @endif
    </section>
</section>