{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Otwórz okno modalne
  </button> --}}
  {{-- <x-modal_window_component id="access_limited"
  title="{{ __( 'base.modal_window_accsess_limited_title' ) }}"
  message="{{ __( 'base.modal_window_accsess_limited_message' ) }}"
  closeButtonText="{{ __( 'base.modal_window_close_window' ) }}"
  secondButtonLink="/login"
  secondButtonText="{{ __( 'base.login' ) }}"
  thirdButtonLink="/register"
  thirdButtonText="{{ __( 'base.register' ) }}"
  /> --}}

<div class="modal fade" id="modal_window_{{ $id }}" role="dialog" tabindex="-1" aria-labelledby="modal_label_{{ $id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal_label_{{ $id }}">{{ $title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ $message }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ $closeButtonText }}</button>
            <a href="{{ $secondButtonLink }}" class="btn btn-primary">{{ $secondButtonText }}</a>
            <a href="{{ $thirdButtonLink }}" class="btn btn-primary">{{ $thirdButtonText }}</a>
        </div>
        </div>
    </div>
</div>
