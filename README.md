## Wymagane przed istalacją

[RedirectionConfirmExtension](https://github.com/lukasz-kukulka/mgs_laravel_extensions/tree/ConfirmAccessExtension)

## Jak dodać do projektu rozszerzenie `ChangePasswordExtension`

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
                "MGSCPE\\": "vendor/mgs/change_password/ChangePasswordExtension",
            },
    }
    ```
    
3. Dodajemy również w pliku `composer.json` w sekcji `require`
 `"mgs/change_password": "dev-ChangePasswordExtension",`
4. Wykonujemy polecenie w konsoli `composer update`, przy pierwszym uruchomieniu z jakimkolwiek branchem z naszej biblioteki poprosi o token`, wykonujemy instrukcje z konsoli jakie sie pojawią
5. Dodajemy do pliku `routes/web.php` plik z naszymi trasami dodając linie na górze pliku
    
    ```php
    require base_path('vendor\mgs\mgs_laravel_extensions\ChangePasswordExtension\Routes\routes.php');
    ```
    
6. Zmieniamy plik: `config/view.php`
dodając linie `base_path('vendor/mgs/mgs_laravel_extensions/ChangePasswordExtension/Views'),`
    
    ```php
    'paths' => [
            resource_path('views'),
            base_path('vendor/mgs/mgs_laravel_extensions/ChangePasswordExtension/Views'),
        ],
    
    ```
    

## Jak użyć

W kontrolerze w wybranej metodzie dodajemy

```php
return view('confirm_access_question')
            ->with('id', 'delete_user_account')
            ->with('question', __('base.user_account_delete_question'))
            ->with('yesRoute', 'user/profile/destroy/confirm')
            ->with('noRoute', 'profile');
```

Gdzie:

`id` : nazwa akcji

`question` : pytanie które sie wyświetli na stronie

`yesRoute` : ścieżka do której zostaniemy przekierowani po naciśnieciu potwierdzenia

`noRoute` : ścieżka do której zostaniemy przekierowani po naciśnieciu zaprzeczenia

## Dostępne tłumaczenia

🇵🇱 Polski
