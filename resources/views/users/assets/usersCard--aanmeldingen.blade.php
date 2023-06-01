<section class="usersCard__aanmeldingCard">
    <h3 class="usersCard__aanmeldingTitle">Nieuwe aanvraag!</h3>
    <p class="usersCard__aanmeldingText">{{$aanmelding->user->name}} wilt graag op {{$aanmelding->huisdier->name}} passen!</p>
    <form class="usersCard__formAccept" action="{{ route('aanmeldingen.accept', $aanmelding->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit" class="usersCard__huisdierButton button__True">Accepteren!</button>
    </form>
    <form class="usersCard__formReject" action="{{ route('aanmeldingen.destroy', $aanmelding->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="usersCard__huisdierButton button__False">Weigeren</button>
    </form>
</section>