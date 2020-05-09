<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_products;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getIndex()
    {
        $category = DB::table('type_products')->Paginate(6);
        return view('general.home',compact('category'));
        //return view('page.index',compact('product','category'));
    }

    public function getSearch(Request $req){
        $tk_sanpham = Product::where('name','like','%'.$req->key.'%')
                    ->where('location',$req->location)
                    ->where('type_product',$req->type_product)
                    ->get();
        return view('page.search',compact('tk_sanpham'));
    }
}
