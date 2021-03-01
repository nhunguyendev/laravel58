<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function getIndex(){
        $data['featured'] = Product::where('featured', 1)->take(6)->orderBy('id', 'desc')->get();
        $data['new'] = Product::take(6)->orderBy('id', 'desc')->get();
        // dd($data);
        return view('frontend.index', $data);
    }

    public function getDetail($id){
        $data['product'] = Product::find($id);
        return view('frontend.product-detail', $data);
    }

    public function getCategory($id){
        $data['category'] = Product::where('category_id', $id)->orderBy('id', 'desc')->paginate(4);
        $data['category_name'] = Category::find($id);
        return view('frontend.category', $data);
    }

    public function getSearch(Request $request){
        $result = $request->key;
        $data['key'] = $result;
        $result = str_replace(' ', '%', $result);

        $data['items'] = Product::where('name', 'like', '%' . $result . '%')->get();
        return view('frontend.search', $data);
    }

    //Cart

    public function getAddCart($id){

        // session()->flush('cart');
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'img' => $product->img1
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function getCheckOut(){
        $cart['cart'] = session()->get('cart');
        return view('frontend.cart', $cart); 
        
    }

    public function getUpdateCart(Request $request){
        
        if($request->id && $request->quantity){
            $cartUpdate = session()->get('cart');
            $cartUpdate[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cartUpdate);
            $cartUpdate['cart'] = session()->get('cart');

            $cartView = view('frontend.cart_sum', $cartUpdate)->render();

            return response()->json([
                'cartView' => $cartView,               
                'code' => 200
            ], 200);
        }
    }

    public function getUpdateCartId(Request $request, $id){

        $product = Product::find($id);
        $quantity = $request->quantity;
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + $quantity;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'img' => $product->img1
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
       
    }

    public function getDeleteCart(Request $request){
        if($request->id){
            $id = $request->id;
            $cartDelete = session()->get('cart');
            unset($cartDelete[$id]);
            
            session()->put('cart', $cartDelete);
            $cartDelete['cart'] = session()->get('cart');

            $cartView = view('frontend.cart_sum', $cartDelete)->render();

            return response()->json([
                'cartView' => $cartView,               
                'code' => 200
            ], 200);
        }
    }

    public function postConfirm(Request $request){
        $data['info'] = $request->all();
        $email = $request->email;
        Mail::send('frontend.email', $data, function ($message) use ($email) {
            $message->from('nhuhyip@gmail.com', 'NHUHYIP');
        
            $message->to($email, 'HHH')->cc('nhunguyenjs@gmail.com', 'JJJ');

            $message->subject('Xác nhận thanh toán đơn hàng');


        });
    }
}
