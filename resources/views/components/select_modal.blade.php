<div class="select-modal remodal" data-remodal-id="modal_02"
    data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
    <button data-remodal-action="close" class="s-modal_close"><i class="fas fa-times"></i></button>
    <div class="s-modal_wrap">
        <label>Which format do you want to export?</label>
        <div class="">
            <a href="{{ route('pdf.horizontal', ['post_id' => $novels->id, 'status' => Crypt::encrypt($novels->status)]) }}"
                class="btn btn-secondary me-1">Horizontal</a>
            <button {{--a href="{{ route('pdf.vertical', ['post_id' => $novels->id, 'status' => Crypt::encrypt($novels->status)]) }}" --}}
                class="btn btn-secondary" disabled>Vertical</button>
        </div>
    </div>
</div>
