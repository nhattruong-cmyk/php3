<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
   function index(){
        $newProducts = Product::orderBy('created_at', 'desc')->limit(4)->get();
        $viewProducts = Product::orderBy('view', 'desc')->limit(4)->get();
        return view('home', compact('newProducts', 'viewProducts'));

    } 

}
