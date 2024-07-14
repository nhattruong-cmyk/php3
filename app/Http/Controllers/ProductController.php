<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function products(request $request){
        
        $dsdm = Category::orderBy('name', 'ASC')->get();
        if($request->category_id){
            $dssp = Product::where('category_id', $request->category_id)->orderBy('id', 'DESC')->paginate(6);
        }else{
            $dssp = Product::orderBy('id', 'DESC')->paginate(6);
        } return view('products', compact('dsdm', 'dssp'));

    }
    public function detail(request $request){

        if($request->product_id){
            $sp=Product::find($request->product_id);
            $splq=Product::where('category_id', $sp->category_id)->where('id', '<>', $sp->id)->limit(4)->get();

            return view('detail', compact('sp', 'splq') );

        }
    }

    public function search(request $request){
        
        $dsdm = Category::orderBy('name', 'ASC')->get();
        $kyw = $request->input('query');
        $dssp = Product::where('name','LIKE', "%$kyw%")->orWhere('description','LIKE', "%$kyw%")->orderBy('id', 'DESC')->paginate(6);
        
        return view('products', compact('dsdm', 'dssp'));

    }
    
}