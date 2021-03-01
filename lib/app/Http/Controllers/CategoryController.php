<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;

class CategoryController extends Controller
{
    //
    public function getCategory(){
        $data = Category::all();
        return view('backend.category', ['categories'=>$data]);
    }

    public function postCategory(AddCategoryRequest $request){
        $category = new Category();
        $category->category_name = $request->name;
        $category->category_slug = str_slug($request->name);
        $category->save();
        return redirect('admin/category');
    }

    public function getAddCategory(){
        return view('backend.category-add');
    }

        
    public function getEditCategory(Category $data){
        return view('backend.category-edit', ['category' => $data]);
    }

    public function postEditCategory(EditCategoryRequest $request, $id){
        $category = Category::find($id);
        $category->category_name = $request->name;
        $category->category_slug = str_slug($request->name);
        $category->save();
        return redirect('admin/category');
    }


    public function getDeleteCategory(Category $data){
        $data->delete();
        return back();
    }
}
