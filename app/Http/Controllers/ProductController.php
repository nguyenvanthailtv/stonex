<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('user.pages.product');
    }

    public function product_detail(){
        return view('user.pages.product_detail');

    }
}
