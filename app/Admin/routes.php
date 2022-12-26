<?php

use App\Admin\Controllers\JnUserController;
use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    Route::resources([
        'posts' => 'JnPostController',
        'files' => 'JnFileController',
        'companies' => 'JnCompanyController',
        'reports' => 'JnReportController',
    ]);
    $router->resource('users', JnUserController::class);
});
