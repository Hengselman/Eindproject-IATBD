<section class="usersCard__postReview">
    <h2 class="usersCard__postReview--h2">Schrijf een Review</h2>
    <form class="usersCard__postReview--form" action="{{ route('reviews.store', $huisdier->id) }}" method="POST">
        @csrf
        <input type="hidden" name="reviewer_name" id="reviewer_name" value="{{ $user->name }}">
        <textarea name="review_text" id="review_text"></textarea>
        <input type="hidden" name="huisdier_id" value="{{$huisdier->id}}">
        <button type="submit">Post je review</button>
    </form>
</section>
