<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\ProductController;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

//Routing and Response
// Route::get('/response-sample', function () {
//     return response('<h1>This is sample of response</h1>');
// });

//wildcard
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// });

//wildcard w/ constraint
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// })->where('id','[0-9]+');

//Request & Query Parameters
// Route::get('/search', function (Request $request) {
//     // ddd($request);
//     // dd($request);
//     return ($request->name.' '.$request->pet);
// });

//Basic View and Passing of Data
// Route::get('/products', function () {
//     return view('index',[
//         'title'     =>  'Products',
//         'heading'   =>  'Coffee',
//         'coffee'    =>  [[
//             'id'        =>  '1',
//             'flavor'    =>  'Hazelnut',
//             'desc'      =>  'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having.'
//         ],
//         [
//             'id'        =>  '2',
//             'flavor'    =>  'Iced Americano',
//             'desc'      =>  'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having.'
//         ]
//     ]]);
// });

Route::get('/products',[ProductController::class, 'index'])->name('main.products');

Route::get('/register',[TenantController::class, 'create'])->name('main.tenant_register');
Route::post('/register',[TenantController::class, 'store'])->name('main.tenant_store');

Route::resource('/admin',AdminController::class);