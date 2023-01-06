<?php

use App\Admin\Controllers\Admin\JnCompanyController;
use App\Admin\Controllers\Admin\JnFileController;
use App\Admin\Controllers\Admin\JnLanguageController;
use App\Admin\Controllers\Admin\JnNewController;
use App\Admin\Controllers\Admin\JnObjectLanguageController;
use App\Admin\Controllers\Admin\JnPostController;
use App\Admin\Controllers\Admin\JnReportController;
use App\Admin\Controllers\User\JnUserBannedController;
use App\Admin\Controllers\User\JnUserCandidateController;
use App\Admin\Controllers\User\JnUserHRController;
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
    $router->resource('/posts', JnPostController::class);
    $router->resource('/files', JnFileController::class);
    $router->resource('/companies', JnCompanyController::class);
    $router->resource('/reports', JnReportController::class);
    $router->resource('/users-candidate', JnUserCandidateController::class);
    $router->resource('/users-hr', JnUserHRController::class);
    $router->resource('/users-banned', JnUserBannedController::class);
    $router->resource('/news', JnNewController::class);
    $router->resource('/languages', JnLanguageController::class);
    $router->resource('/object-languages', JnObjectLanguageController::class);
});
