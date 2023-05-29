<section class="filter__wrapper">
    <section class="filter__option">
        <form action="{{ route('logout') }}" method="POST">
            <button type="submit" class="huisdierCard__button">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Uitloggen</a>
            </button>    
            @csrf
        </form>
    </section>
</section>