<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
   
        return view('products', compact('products'));
    }
   
    public function cart()  
    {
        return view('cart');  
    }
   
    
   
    public function addToCart($id)
    {
        $product = Product::find($id);
   
        if(!$product) {
   
            abort(404);
   
        }

        $cart = session()->get('cart');  
   
        if(!$cart) {
   
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
   
            session()->put('cart', $cart);
   
            return redirect()->back()->with('success', '成功新增至購物車！！！');
        }
   
        if(isset($cart[$id])) {
   
            $cart[$id]['quantity']++;
   
            session()->put('cart', $cart);
   
            return redirect()->back()->with('success', '成功將商品新增至購物車！！！');
   
        }
   
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
   
        session()->put('cart', $cart);
   
        return redirect()->back()->with('success', '成功將商品新增至購物車！！！');
    }
   
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
   
            $cart[$request->id]["quantity"] = $request->quantity;
   
            session()->put('cart', $cart);
   
            session()->flash('success', '購物車更新成功');
        }
    }
   
    public function remove(Request $request)
    {
        if($request->id) {
   
            $cart = session()->get('cart');
   
            if(isset($cart[$request->id])) {
   
                unset($cart[$request->id]);
   
                session()->put('cart', $cart);
            }
   
            session()->flash('success', '商品刪除成功');
        }
    }
}
