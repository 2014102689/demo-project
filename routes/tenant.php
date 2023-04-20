<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tenant\MainController;
use App\Http\Controllers\tenant\AdminController;
use App\Http\Controllers\tenant\SessionController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/' , [MainController::class ,'index'])->name('tenant.index');
    Route::get('/login' , [SessionController::class ,'index'])->name('tenant.login');
    Route::post('/login' , [SessionController::class ,'create'])->name('tenant.create');
    Route::get('/dashboard' , [AdminController::class ,'index'])->name('tenant.dashboard');
});
