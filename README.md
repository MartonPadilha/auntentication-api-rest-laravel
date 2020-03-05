<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
-> Criar o projeto e parametrizar o bando de dados
-> Dar o comando 
    *php artisan make:controller Api\\UserController --api*
-> Logo após, desenvolver o metódo index que retornará os registros desse controller (App\Http\Controllers\Api\UserController@index)
-> Criar uma rota para retornar os registros, lembrando que as rotas precisam do prefixo "api/"
-> Acessar https://github.com/tymondesigns/jwt-auth
-> Dar o comando *composer require tymon/jwt-auth 1.0.0*
-> Em config/app.php
    'providers' => [
        ...
        Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
    ]
-> Dar o comando *php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"*




