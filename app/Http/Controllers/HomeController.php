<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeProduct;
use App\Product;
use App\User;
use App\PurchaseHistory;
use App\LoyalCustomer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
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
        $tk_sanpham = DB::table('products')
                                ->join('type_products', 'products.type_product', '=', 'type_products.id')
                                ->where('products.name','like','%'.$req->q.'%')
                                ->where('products.description','like','%'.$req->q.'%')
                                ->where('products.type_product','like','%'.$req->category.'%')
                                ->where('products.city','like','%'.$req->city.'%')
                                ->where('products.district','like','%'.$req->district.'%')
                                ->where('products.sub_district','like','%'.$req->sub_district.'%')
                                ->where('products.street','like','%'.$req->street.'%')
                                ->select('products.*', 'type_products.name as TypeProduct')
                                ->Paginate(10);
        $searching = $req;
        return view('general.search',compact('tk_sanpham', 'searching'));
    }

    public function getProducts()
    {
        $products = DB::table('products')
                                    ->join('type_products','products.type_product','=','type_products.id')
                                    ->select('products.id','products.name','type_products.name as type','products.image','products.description','products.quantity','products.price',DB::raw('CONCAT("Thành Phố ",city,", Quận ", district,", Phường ",sub_district,", Đường ",street) AS location'),'products.updated_at')
                                    ->where('products.id_user',Auth::id())
                                    ->get();
        return view('user.products',compact('products'));
    }
    public function updateUser(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'address' => 'required'
        ]);
        $user = User::find(Auth::id());
        $user->name = $req->name;
        $user->address =  $req->address;
        if($req->hasFile('avatar'))
        {
            if (Storage::disk(config('voyager.storage.disk'))->exists($user->avatar)) {
                Storage::disk(config('voyager.storage.disk'))->delete($user->avatar);
            }
            $user->avatar = Storage::disk(config('voyager.storage.disk'))->put('users',$req->avatar);
        }
        $user->save();
        return back();
    }

    public function createProduct(Request $req)
    {
        $this->validate($req,
            [
                'name'=>'required',
                'type_product'=>'required',
                'quantity'=>'required',
                'price'=>'required',
                'city'=>'required',
                'district'=>'required',
                'sub_district'=>'required',
                'street'=>'required',
            ],
            [
                'name.required'=>'Vui lòng nhập sản phẩm',
                'type_product.required'=>'Vui lòng nhập loại sản phẩm',
                'quantity.required'=>'Vui lòng nhập số lượng',
                'price.required'=>'Vui lòng nhập giá',
                'city.required'=>'Vui lòng nhập thành phố',
                'district.required'=>'Vui lòng nhập quận',
                'sub_district.required'=>'Vui lòng nhập phường',
                'street.required'=>'Vui lòng nhập đường',
            ]);
        $product = new Product;
        $product->id_user = Auth::id();
        $product->name = $req->name;
        $product->type_product = $req->type_product;

        $product->image = Storage::disk(config('voyager.storage.disk'))->put("products/", $req->image);

        $product->description = $req->description;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->city = $req->city;
        $product->district = $req->district;
        $product->sub_district = $req->sub_district;
        $product->street = $req->street;
        $product->save();
        return back();
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if (isset($product->id)) {
            if (Storage::disk(config('voyager.storage.disk'))->exists($product->image)) {
                Storage::disk(config('voyager.storage.disk'))->delete($product->image);
            }
            $product->delete();
        }
        return response()->json("Xóa sản phẩm thành công");
    }

    public function editProduct($id)
    {
        $product = DB::table('products')
                            ->join('type_products','products.type_product','=','type_products.id')
                            ->select('products.id','products.name','products.type_product','products.image','products.description','products.quantity','products.price','products.city','products.district','products.sub_district','products.street','products.updated_at')
                            ->where('products.id',$id)
                            ->get();
        return response()->json($product);
    }

    public function updateProduct(Request $req,$id)
    {
        $product = Product::find($id);
        $product->name = $req->name;
        $product->type_product = $req->type_product;
        if($req->hasFile('image'))
        {
            if (Storage::disk(config('voyager.storage.disk'))->exists($product->image)) {
                Storage::disk(config('voyager.storage.disk'))->delete($product->image);
            }
            $product->image = Storage::disk(config('voyager.storage.disk'))->put('products',$req->image);
        }
        $product->description = $req->description;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->city = $req->city;
        $product->district = $req->district;
        $product->sub_district = $req->sub_district;
        $product->street = $req->street;
        $product->save();
        return response()->json("Sửa sản phẩm thành công");
    }

    public function getCategory($id)
    {
        $product = Product::where('type_product',$id)->paginate(3);
        return view('general.category',compact('product'));
    }

    public function getSingleProduct($id)
    {
        $single_product = DB::table('products')
                        ->join('users','users.id','=','products.id_user')
                        ->where('products.id',$id)
                        ->select('products.*', 'users.name as store')
                        ->first();
        return view('general.single_product',compact('single_product'));
    }

    public function getUser($id)
    {
        if(Auth::check()){
            $user = DB::table('users')
                        ->where('users.id',$id)
                        ->select('users.*')
                        ->first();
            return response()->json($user);
        }else{
            return 'fail';
        }
        
    }

    public function getPurchaseHistory()
    {
        $seller_purchase_history = DB::table('purchase_history')
                                        ->where('seller',Auth::id())
                                        ->join('products','products.id','=','purchase_history.product_id')
                                        ->join('users','users.id','=','purchase_history.buyer')
                                        ->select('purchase_history.id','users.email as buyer','products.name','products.image','products.price','purchase_history.quantity','purchase_history.updated_at','purchase_history.status')
                                        ->get();
        $buyer_purchase_history = DB::table('purchase_history')
                                        ->where('buyer',Auth::id())
                                        ->join('products','products.id','=','purchase_history.product_id')
                                        ->join('users','users.id','=','purchase_history.seller')
                                        ->select('purchase_history.id','users.email as seller','products.name','products.image','products.price','purchase_history.quantity','purchase_history.updated_at','purchase_history.status')
                                        ->get();
        $purchase_history = $seller_purchase_history->merge($buyer_purchase_history);
        // return response()->json($purchase_history);
        return view('user.purchase_history', compact('purchase_history'));
    }

    public function changeStatusPurchase(Request $req,$id_purchase)
    {
        if($req->status == "complete")
        {
            $purchase = PurchaseHistory::find($id_purchase);
            self::setLoyalCustomer($purchase->seller);
            self::setLoyalCustomer($purchase->buyer);
            $purchase->status = 2;
            $purchase->save();
            return response()->json("Đã hoàn thành giao dịch");
        }
        elseif($req->status == "cancel")
        {
            $purchase = PurchaseHistory::find($id_purchase);
            $purchase->status = 0;
            $purchase->save();
            return response()->json("Đã hủy giao dịch");
        }
    }
    
    public function setLoyalCustomer($user_id)
    {
        $total_sell = DB::table('purchase_history')
                                    ->where('seller',$user_id)
                                    ->join('products','products.id','=','purchase_history.product_id')
                                    ->select('purchase_history.product_id',DB::raw('sum(purchase_history.quantity)*products.price as total'))
                                    ->groupBy('purchase_history.product_id')
                                    ->get();
        $total_buy = DB::table('purchase_history')
                                    ->where('buyer',$user_id)
                                    ->join('products','products.id','=','purchase_history.product_id')
                                    ->select('purchase_history.product_id',DB::raw('sum(purchase_history.quantity)*products.price as total'))
                                    ->groupBy('purchase_history.product_id')
                                    ->get();
        $sum = 0;
        foreach ($total_sell as $one) {
            $sum += $one->total;
        }
        foreach ($total_buy as $one) {
            $sum += $one->total;
        }
        $level;
        if($sum>=1000000 && $sum<5000000)
        {
            $level = 1;
        }
        elseif($sum>=5000000 && $sum<20000000)
        {
            $level = 2;
        }
        elseif($sum>=20000000 && $sum<50000000)
        {
            $level = 3;
        }
        elseif($sum>=50000000 && $sum<100000000)
        {
            $level = 4;
        }
        elseif($sum>=100000000 && $sum<500000000)
        {
            $level = 5;
        }
        elseif($sum>=500000000 && $sum<1000000000)
        {
            $level = 6;
        }
        elseif($sum>=1000000000 && $sum<2000000000)
        {
            $level = 7;
        }
        elseif($sum>=2000000000 && $sum<5000000000)
        {
            $level = 8;
        }
        elseif($sum>=5000000000 && $sum<10000000000)
        {
            $level = 9;
        }
        else
        {
            $level = 0;
        }
        $customer = LoyalCustomer::updateOrCreate(
            ['user_id' => $user_id],
            ['level'=> $level]
        );
    }
}
