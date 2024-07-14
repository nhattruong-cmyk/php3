<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function blog(){
        // tương tác với model để lẩy dữ liệu
        
        
        
        // hiển thị dữ liệu
                return view('blog');
            } 
}
