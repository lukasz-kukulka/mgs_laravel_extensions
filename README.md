# ConfirmAccessExtension

## Jak dodać do projektu rozszerzenie `ConfirmAccessExtension`

1. W pliku `composer.json` dodajemy sekcje, lub do sekcji `repositories` o ile istnieje:
    
    ```php
    "repositories": [
            {
                "type": "vcs",
                "url": "git@github.com:lukasz-kukulka/mgs_laravel_extensions.git",
                "branch": "ConfirmAccessExtension"
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
 `"mgs/confirm_access": "dev-ConfirmAccessExtension",`

4. Wykonujemy polecenie w konsoli `composer update`, przy pierwszym uruchomieniu z jakimkolwiek branchem z naszej biblioteki poprosi o token`, wykonujemy instrukcje z konsoli jakie sie pojawią
5. Dodajemy do pliku `routes/web.php` plik z naszymi trasami dodając linie na górze pliku
    
    ```php
    require base_path('vendor\mgs\mgs_laravel_extensions\ConfirmAccessExtension\Routes\routes.php');
    ```
    
6. Zmieniamy plik: `config/view.php`
dodając linie `base_path('vendor/mgs/mgs_laravel_extensions/ConfirmAccessExtension/Views'),`
    
    ```php
    'paths' => [
            resource_path('views'),
            base_path('vendor/mgs/mgs_laravel_extensions/ConfirmAccessExtension/Views'),
        ],
    
    ```
