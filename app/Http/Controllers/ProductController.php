<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
class ProductController extends Controller
{
    //
    
    function index(){
        $data= Product::all();
        return view("product",['collection'=>$data]);
    }

    function detail($id){
        $dat=Product::find($id);
        return view("detail",['item'=>$dat]);
    } 
    function search(Request $req){
        // return $req->input();
        ///below code is use to get query from search box and
        // match with the database name coloumn 
        $data= Product::
        where('name','like','%' .$req->input("query").'%')->get();
        return view("search",['collection'=>$data]);
    }

    function addCarts(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;        
            //below line got an error because     
            // $cart->user_id=$req->session()->get('user')['id'];
            //this code gets from chat gpt which decode it into array
            $user = (array) json_decode($req->session()->get('user'));
            $cart->user_id = $user['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect("product"); 
        }
        else{
            return redirect("login");    
        }

    }
        static function cartItem(){
        $user = (array) json_decode(Session::get('user'));
        $userId = $user['id'];
        return Cart::where('user_id', $userId)->count();
   }

   function cartList(){
    $user = (array) json_decode(Session::get('user'));
    $userId = $user['id'];
    $data=DB::table("cart")
    ->join('products','cart.product_id','products.id')
    ->select('products.*','cart.id as cart_id')
    ->where('cart.user_id',$userId)->get();
    return view('cartlist',['products'=>$data]);
   }

   function removecart($id){
    ////below function is removing the id from its database 
        Cart::destroy($id);
        return redirect("cartlist");
   }

   function ordernow(){
    $user = (array) json_decode(Session::get('user'));
    $userId = $user['id'];
   
    ///below code is use to get the sum of
    // product price against the user cart and save it to some $total
    $total = DB::table("cart")
    ->join('products','cart.product_id','products.id')
    ->where('cart.user_id',$userId)
    ->sum('products.price');
    
    return view('ordernow',['totals'=>$total]);
   }

   function orderplace(Request $req){
    $user = (array) json_decode(Session::get('user'));
    $userId = $user['id'];
    //below code is use to get user id from cart and save it into variable
    $cartall=Cart::where('user_id',$userId)->get();
    
    foreach($cartall as $cart){
        $order=new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->address=$req->address;
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->save();

    }
    $cartall=Cart::where('user_id',$userId)->delete();
    return redirect("product");
   }


   function myorder(){
    $user = (array) json_decode(Session::get('user'));
    $userId = $user['id'];
    ///below code is use to get the sum of
    // product price against the user cart and save it to some $total
    $tot = DB::table("orders")
    ->join('products','orders.product_id','products.id')
    ->where('orders.user_id',$userId)
    ->get();

    $totals = DB::table("cart")
    ->join('products','cart.product_id','products.id')
    ->where('cart.user_id',$userId)
    ->sum('products.price');
  
    return view('myorder',compact('tot','totals'));    
   }

  
   







}
?>
