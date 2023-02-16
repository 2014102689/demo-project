<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //return the data from model
    public function index(){
        return view('index',
        [
            'title'     =>  'Products',
            'heading'   =>  'Coffee',
            'product' => Products::all()
        ]
    );
    }
}
