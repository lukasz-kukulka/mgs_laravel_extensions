{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Otwórz okno modalne
  </button> --}}

<div class="modal fade" id="modal_window_{{ $id }}" tabindex="-1" aria-labelledby="modal_label_{{ $id }}" aria-hidden="true">
    <div class="modal_dialog">
        <div class="modal_content">
        <div class="modal_header">
            <h5 class="modal_title" id="modal_label_{{ $id }}">{{ $modalWindowTitle }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ $modalWindowMessage }}
        </div>
        <div class="modal_footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ $buttonCloseText }}</button>
            <a href="{{ $secondButtonLink }}" class="btn btn-primary">{{ $secondButtonText }}</a>
            <a href="{{ $thirdButtonLink }}" class="btn btn-primary">{{ $thirdButtonText }}</a>
        </div>
        </div>
    </div>
</div>
