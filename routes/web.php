<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

// Route::get('/sample', function () {
//     return view('index');
// });

//Routing and Response
// Route::get('/', function () {
//     return response('<h1>Hello World<h1>');
// });

//Wild card Endpoints
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// });

//Wild card with constraints
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// })->where('id','[0-9]+');

// // Request and Query Parameter
// Route::get('/search', function (Request $request) {
//     dd($request);
//     // ddd($request);
//     return ($request->name." ".$request->pet);
// });

// View Basics and Passing of data
// Route::get('/products', function () {
//     return view('index',['title'=>'Products']);
// });

// Route::get('/products', function () {
//     return view('index',
//     [
//         'title'     =>  'Products',
//         'heading'   =>  'Coffee',
//         'product'   =>  [
//             [
//                 'id'        =>  '1',
//                 'flavor'    =>  'Hazelnut',
//                 'desc'      =>  'This coffee is hazelnut flavor.This coffee is hazelnut flavorThis coffee is hazelnut flavorThis coffee is hazelnut flavor.'
//             ],
//             [
//                 'id'        =>  '2',
//                 'flavor'    =>  'Macchiato',
//                 'desc'      =>  'This is Macchiato Flavor.'
//             ]
//         ]
//     ]);
// });

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
