<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_products;
use App\products;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categor1y = DB::table('type_products');
    }
    public function getIndex()
    {
        $category = DB::table('type_products')->Paginate(6);
        return view('general.home',compact('category'));
        //return view('page.index',compact('product','category'));
    }

    public function getSearch(Request $req){
        $tk_sanpham = DB::table('products')
                                ->join('type_products', 'products.type_product', '=', 'type_products.id')
                                ->where('products.name','like','%'.$req->q.'%')
                                ->where('location','like','%'.$req->location.'%')
                                ->where('type_product','like','%'.$req->category.'%')
                                ->select('products.*', 'type_products.name as TypeProduct')
                                ->get();
        $searching = $req;
        return view('general.search',compact('tk_sanpham', 'searching'));
    }
}
