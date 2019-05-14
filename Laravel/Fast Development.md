***Laravel Fast prototypeing & Development***


```
composer create-project --prefer-dist laravel/laravel prototype
```
*to generate key*

```
php artisan key:generate
```

*run mighration*
```
php artisan migrate

php artisan migrate:fresh [Rollback]
```
- "Specified key was too long"

```
AppServiceProvider.php

use Illuminate\Support\Facades\Schema;

public function boot(){
	Schema::defaultStringLength(255);
}

```

***Auth***

```
php artisan make:auth
```
***Swagger***
use to create API documantation


***make model view and controller***
labs.infyom.com/laravelgenerator



Follow docs to update composer and add refrences to App.php