<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
-> Criar o projeto e parametrizar o bando de dados
<br>
-> Dar o comando 
    *php artisan make:controller Api\\UserController --api*
<br>
-> Logo após, desenvolver o metódo index que retornará os registros desse controller (App\Http\Controllers\Api\UserController@index)
<br>
-> Criar uma rota para retornar os registros, lembrando que as rotas precisam do prefixo "api/"
<br>
-> Acessar https://github.com/tymondesigns/jwt-auth
<br>
-> Dar o comando *composer require tymon/jwt-auth 1.0.0*
<br>
-> Em config/app.php
    'providers' => [
        ...
        Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
    ]
<br>
-> Dar o comando *php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"*
<br>
-> Comando *php artisan jwt:secret*
<br>
-> Implements JWTSubject em model User
<br>
-> Copiar os metódos
<br>
-> Configurar Auth Guard em config/auth.php 
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],

    ...

    'guards' => [
        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
        ],
    ],
<br>
-> Criar AuthController para gerenciar a autenticação do usuário
    *php artisan make:controller Api\\AuthController --api*
<br>
-> Logo após, desenvolver os metódos de login, logout...que farão o gerenciamento da autenticação (App\Http\Controllers\Api\AuthController)
<br>
-> Criar as rotas e testar
<br>
-> Criar um Middleware 
*php artisan make:middleware apiProtectedRoute*
<br>
-> Extender BaseMiddleware no Middleware criado, desenvolver os métodos (App\Http\Middleware\apiProtectedRoute.php)
<br>
-> Em App\Http\Kernel.php nas rotas dos middlewares, adicionar
        'apiJwt' => \App\Http\Middleware\apiProtectedRoute::class
<br>
-> Desenvolver a rota com middleware
<br>
-> Para teste, deve adiconar a Authorization Bearer mais o token gerado apartir do login.




