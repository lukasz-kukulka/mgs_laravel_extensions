## Ogólne informacje

- Każdy branch reprezentuje jedno rozszerzenie
- Na branchu master są dostępne wszystkie rozszerzenia
- Na każdym branchu jest wyjaśnienie do czego służy
- Każdy branch ma tagi które wskazują wersję rozszerzenia

## Instrukcja jak dodać do projektu

1. W pliku `composer.json` dodajemy sekcje, lub do sekcji `“repositories”` o ile istnieje:

```php
"repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:lukasz-kukulka/mgs-laravel-extensions.git"
        }
    ],
```

3. Dodajemy również w pliku `composer.json` w sekcji `“require”`
np: `"mgs/mgs-laravel-extensions": "dev-ConfirmAccessExtension#0.0.3",`
gdzie:  
    - dev-: obowiązkowy element
    - **ConfirmAccessExtension: nazwa brancha, czyli rozszerzenia**
    - #: obowiązkowy element
    - 0.0.3 tag wersji, czyli wersja rozszerzenia (tag wersji znajdziemy na głównej stronie repo na github, po prawej stronie w sekcji `Releases` )

```php
"mgs/mgs-laravel-extensions": "dev-ConfirmAccessExtension#0.0.3",
```

3. Wykonujemy polecenie w konsoli `composer update`, przy pierwszym uruchomieniu poprosi o token`, wykonujemy instrukcje z konsoli jakie sie pojawią

## Edycja

WKRÓTCE
