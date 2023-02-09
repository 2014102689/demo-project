<?php

use Illuminate\Support\Facades\Route;
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

//Routes and Response
// Route::get('/sample', function () {
//     return response('hello World');
// });

//Wildcard Endpoints
// Route::get('/sample/{id}', function ($id) {
//     return response($id." ".'<- This is the wildcard value');
// });

//Route Constrainsts
// Route::get('/sample/{id}', function ($foo) {
//     return response($foo." ".'<- This is the wildcard value');
// })->where('id','[0-9]+');

//Request and Query parameters
// Route::get('/search', function (Request $request) {
//     return ($request->name." ".$request->pet);
// });

// Basic View & Passign of data
// Route::get('/products', function () {
//     return view('index',[
//         'title'     =>  'Products',
//         'heading'   =>  'Coffee',
//         'coffee_var' =>  [
//             [
//                 'flavor'    =>  'Hazelnut',
//                 'desc'      =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero augue, aliquam at metus quis, malesuada malesuada sem.'
//             ],
//             [
//                 'flavor'    =>  'Ice Americano',
//                 'desc'      =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque libero augue, aliquam at metus quis, malesuada malesuada sem.'
//             ]
//         ]
//     ]);
// });

Route::get('/products', [ProductController::class,'index'])->name('products');