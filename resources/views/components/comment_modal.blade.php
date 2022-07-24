<div class="comment-modal remodal" data-remodal-id="modal_01" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
    <button data-remodal-action="close" class="c-modal_close"><i class="fas fa-times"></i></button>
    <form method="POST" action="{{ route('comment.store', ['post_id' => $novels->id]) }}" class="c-modal_form">
        @csrf
        <label>Comment</label>
        <a href="{{ route('comment.index', ['post_id' => $novels->id]) }}" class="c-modal_link">Check comments</a>
        <textarea id="message" name="message" class="c-modal_message" maxlength="500" required>{{ old('message') }}</textarea>
        <button type="submit" class="c-modal_btn">
            <i class="fas fa-arrow-right fa-2x"></i>
        </button>
    </form>
</div>
