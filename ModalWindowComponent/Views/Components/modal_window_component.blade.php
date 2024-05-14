{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Otwórz okno modalne
  </button> --}}
  {{-- <x-modal_window_component id="modal_label_"
                          title="Brak dostepu do treści"
                          message="Tylko zalogowani użytkopwnicy maja dostęp do danych kontaktowych"
                          closeButtonText="Zamknij okno"
                          secondButtonLink="/login"
                          secondButtonText="Zaloguj"
                          thirdButtonLink="/register"
                          thirdButtonText="Zarejestruj"
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
