<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('manager/users', UserController::class);
    $router->resource('manager/title', TitleController::class);

});

// php artisan make:migration create_staffs_table --create=staffs
// php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
// php artisan admin:make UserController --model=App\\User