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

{{-- Jeśli Twoje pliki komponentu znajdują się w katalogu vendor, najpierw musisz utworzyć symboliczny link do tych plików, aby były dostępne w Twojej aplikacji Laravel.

Utwórz symboliczny link do pliku ModalWindowComponent.php w katalogu app/View/Components:
bash
Copy code
php artisan make:component-alias --component="vendor\mgs\modal_window\ModalWindowComponent\Components\ModalWindowComponent.php"
Utwórz symboliczny link do pliku modal_window_component.blade.php w katalogu resources/views/components:
bash
Copy code
php artisan make:view-component-alias --component="vendor\mgs\modal_window\ModalWindowComponent\Views\Components\modal_window_component.blade.php"
Po wykonaniu tych komend powinny zostać utworzone odpowiednie symboliczne linki do Twoich plików komponentów. Następnie możesz zarejestrować komponenty za pomocą Blade::component() w AppServiceProvider tak, jak opisałem wcześniej. --}}
