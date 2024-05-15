# ModalWindowComponent

## Jak dodać do projektu rozszerzenie `ModalWindowComponent`

1. W pliku `composer.json` dodajemy sekcje, lub do sekcji `repositories` o ile istnieje:
    
    ```php
    "repositories": [
            {
                "type": "vcs",
                "url": "git@github.com:lukasz-kukulka/mgs_laravel_extensions.git"
            }
        ],
    ```
    
2. W pliku `composer.json` dodajemy sekcje, lub do sekcji `autoload` o ile istnieje:
    
    ```php
    "autoload": {
            "psr-4": {
                "MGSMWC\\": "vendor/mgs/modal_window/ModalWindowComponent"
            },
    }
    ```
    
3. Dodajemy również w pliku `composer.json` w sekcji `require`
 `"mgs/modal_window": "dev-ModalWindowComponent",`
4. Wykonujemy polecenie w konsoli `composer update`, przy pierwszym uruchomieniu z jakimkolwiek branchem z naszej biblioteki poprosi o token`, wykonujemy instrukcje z konsoli jakie sie pojawią
5. Dodajemy do pliku `AppServiceProvider.php` lokalizacje i nazwe naszego komponenetu w metodzie `boot()`base_path('vendor/mgs/modal_window/ModalWindowComponent/Views/Components'),
    
    ```php
    Blade::component( 'modal_window_component', 'MGSMWC\Components\ModalWindowComponent');
    ```
    
6. Zmieniamy plik: `config/view.php`
dodając linie `base_path('vendor/mgs/modal_window/ModalWindowComponent/Views/Components'),`
    
    ```php
    'paths' => [
            resource_path('views'),
            base_path('vendor/mgs/modal_window/ModalWindowComponent/Views/Components'),
        ],
    
    ```
    

## Jak użyć

Dodajemy przycisk np:

```php
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_window_access_limited" id="show_contact">{{ __( 'base.show' ) }}</button>
```

gdzie w nazwie `modal_window_access_limited` część `modal_window_` jest częścią wymaganą a część `access_limited` jest częścia dowolna która musi sie pokrywać z `id` poniżej

Dodajemy komponent poniżej przycisku:

```php
<x-modal_window_component id="access_limited"
	  title="{{ __( 'base.modal_window_accsess_limited_title' ) }}"
	  message="{{ __( 'base.modal_window_accsess_limited_message' ) }}"
	  closeButtonText="{{ __( 'base.modal_window_close_window' ) }}"
	  secondButtonLink="/login"
	  secondButtonText="{{ __( 'base.login' ) }}"
	  thirdButtonLink="/register"
	  thirdButtonText="{{ __( 'base.register' ) }}"
  />
```

gdzie:

`id`: nazwa modalnego okna j.w.

`title`: tytuł okna widoczny na jego górze

`message`: widomość okna

`closeButtonText`: tekst na przycisku który powoduje zamkniecie okna

`secondButtonLink`: link do którego przekierowywuje środkowy przycisk

`secondButtonText`: tekst widoczny na srodkowym przycisku

`thirdButtonLink`: link do którego przekierowywuje prawy przycisk

`thirdButtonText`: tekst widoczny na prawym przycisku
