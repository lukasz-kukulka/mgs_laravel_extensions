# Extensions

## Ogólne informacje

- Każdy branch reprezentuje jedno rozszerzenie
- Na branchu master są dostępne wszystkie rozszerzenia
- Na każdym branchu jest wyjaśnienie do czego służy
- Każdy branch ma tagi które wskazują wersję rozszerzenia

## Instrukcja jak dodać do projektu

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
                "MGS\\": "vendor/mgs/mgs_laravel_extensions"
            },
    }
    ```
    
3. Dodajemy również w pliku `composer.json` w sekcji `require`
np: `"mgs/mgs_laravel_extensions": "dev-ConfirmAccessExtension#0.0.3",`
gdzie:  
    - dev-: obowiązkowy element
    - **ConfirmAccessExtension: nazwa brancha, czyli rozszerzenia**
    - #0.0.3 tag wersji, czyli wersja rozszerzenia (tag wersji znajdziemy na głównej stronie repo na github, po prawej stronie w sekcji `Releases`(opcjonalnie), bez tego pobierze najnowsza wersje
    
    ```php
    "mgs/mgs_laravel_extensions": "dev-ConfirmAccessExtension#0.0.3",
    
    //lub wersja bez tagu
    "mgs/mgs_laravel_extensions": "dev-ConfirmAccessExtension",
    ```
    
4. Wykonujemy polecenie w konsoli `composer update`, przy pierwszym uruchomieniu poprosi o token`, wykonujemy instrukcje z konsoli jakie sie pojawią
5. Dodajemy do pliku `routes/web.php` plik z naszymi trasami dodając linie na górze pliku
    
    ```php
    require base_path('vendor\mgs\mgs_laravel_extensions\ConfirmAccessExtension\Routes\routes.php');
    ```
    
    zamieniając `ConfirmAccessExtension` na nazwę naszego rozszerzenia
    
6. Jeżeli korzystamy z widoków w rozszerzeniu zmieniamy plik: `config/view.php`
dodając linie `base_path('vendor/mgs/mgs_laravel_extensions/ConfirmAccessExtension/Views'),`
    
    ```php
    'paths' => [
            resource_path('views'),
            base_path('vendor/mgs/mgs_laravel_extensions/ConfirmAccessExtension/Views'),
        ],
    ```
    
    Zmieniamy `ConfirmAccessExtension` na nazwe naszego rozszerzenia
    

## Edycja

WKRÓTCE

## Tworzenie

WKRÓTCE

## Lista rozszerzeń

WKRÓTCE
