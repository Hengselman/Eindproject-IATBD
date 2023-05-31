<section class="usersCard__huisdierCard">
<!--<figure class="usersCard__huisdierFigure"><img class="usersCard__huisdierImage" src="" alt=""></figure> -->
    <h3 class="usersCard__huisdierName">Test</h3>
    <p class="usersCard__huisdierDescription">{{$user->name}} wilt graag op {{$aanmelding->id}} passen!   {{$huisdierTest1}} EN {{$huisdierVar}} </p>
    <form action="{{ route('aanmeldingen.accept', ['id' => $aanmelding->id]) }}"></form>
        @csrf
        @method('PATCH')
        <button type="submit" class="usersCard__huisdierButton button__True">Accepteren!</button>
    </form>
    <form action="{{ route('aanmeldingen.refuse', ['id' => $aanmelding->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="usersCard__huisdierButton button__False">Weigeren</button>
    </form>
</section>