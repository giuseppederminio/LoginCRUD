<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\ProductController;


class ProductController extends Controller
{
    public function create (){
        return view('product.create');
    }
}
