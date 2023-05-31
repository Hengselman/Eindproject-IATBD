<section>
    <h2>Add a Review</h2>
    <form action="{{ route('reviews.store', $huisdier->id) }}" method="POST">
        @csrf
        <label for="reviewer_name">Je naam:</label>
        <input type="text" name="reviewer_name" id="reviewer_name">
        <label for="review_text">Review:</label>
        <textarea name="review_text" id="review_text"></textarea>
        <input type="hidden" name="huisdier_id" value="{{$huisdier->id}}">
        <button type="submit">Post je review</button>
    </form>
</section>
