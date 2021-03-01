<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct(){
        $data['product_list'] = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.category_name')
            ->orderBy('id', 'desc')->get();
        // dd($data['product_list']);
        return view('backend.product', $data);
        
    }
    
    public function getAddProduct(){
        $data['categories'] = Category::all();
        return view('backend.product-add', $data);
        
    }

    public function postProduct(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->description = $request->description;
        $product->featured = $request->featured;
        $filename1 = $request->img1->getClientOriginalName(); 
        if($request->img2) {
            $filename2 = $request->img2->getClientOriginalName();  
        } 
         
        if($request->img3) {
            $filename3 = $request->img3->getClientOriginalName();  
        } 
        
        if($request->img4) {
            $filename4 = $request->img4->getClientOriginalName();  
        } 
        $product->img1 = $filename1;
        if(isset($filename2)){
            $product->img2 = $filename2;
        }
        if(isset($filename3)){
            $product->img3 = $filename3;
        }
        if(isset($filename4)){
            $product->img4 = $filename4;
        }
        $product->category_id = $request->category_id;
        $product->save();
        
        $path = $request->file('img1')->storeAs('product', $filename1);

        if(isset($filename2)){
            $path2 = $request->file('img2')->storeAs('product', $filename2);
        }
        if(isset($filename3)){
            $path3 = $request->file('img3')->storeAs('product', $filename3);
        }
        if(isset($filename4)){
            $path4 = $request->file('img4')->storeAs('product', $filename4);
        }
        return redirect('admin/product');
    }

    public function getEditProduct($id){
        $data['product'] = Product::find($id);
        $data['categories'] = Category::all();
        return view('backend.product-edit', $data);
    }

    public function postEditProduct(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->description = $request->description;
        $product->featured = $request->featured;
        $filename1 = $request->img1->getClientOriginalName(); 
        if($request->img2) {
            $filename2 = $request->img2->getClientOriginalName();  
        } 
         
        if($request->img3) {
            $filename3 = $request->img3->getClientOriginalName();  
        } 
        
        if($request->img4) {
            $filename4 = $request->img4->getClientOriginalName();  
        } 
        $product->img1 = $filename1;
        if(isset($filename2)){
            $product->img2 = $filename2;
        }
        if(isset($filename3)){
            $product->img3 = $filename3;
        }
        if(isset($filename4)){
            $product->img4 = $filename4;
        }
        $product->category_id = $request->category_id;
        $product->save();
        
        $path = $request->file('img1')->storeAs('product', $filename1);

        if(isset($filename2)){
            $path2 = $request->file('img2')->storeAs('product', $filename2);
        }
        if(isset($filename3)){
            $path3 = $request->file('img3')->storeAs('product', $filename3);
        }
        if(isset($filename4)){
            $path4 = $request->file('img4')->storeAs('product', $filename4);
        }
        
        return redirect('admin/product');
    }

    public function getDeleteProduct($id){

        $product = Product::find($id);
        $img1 = $product->img1;
        $img2 = $product->img2;
        $img3 = $product->img3;
        $img4 = $product->img4;
        
        unlink(storage_path('app/product/' . $img1));
        
        if($img2 != ''){
            unlink(storage_path('app/product/' . $img2));            
        }
        if($img3 != ''){
            unlink(storage_path('app/product/' . $img3));            
        }
        if($img4 != ''){
            unlink(storage_path('app/product/' . $img4));            
        }
        $product->delete();
        return back();
    }

}
