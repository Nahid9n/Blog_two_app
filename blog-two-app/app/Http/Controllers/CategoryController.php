<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add');
    }
    public function store(Request $request){
        Category::newCategory($request);
        return back()->with('message','Add Category Successfully');
    }
    public function manageCategory(){
        $this->categories = Category::all();
        return view('admin.category.manage',['categories' => $this->categories]);
    }
    public function edit($id){
        $this->Category = Category::find($id);
        return view('admin.category.edit',['category' => $this->Category]);
    }
    public function update(Request $request,$id){
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('message','Update Info Successfully');
    }
    public function delete($id){
        Category::deleteCategory($id);
        return back()->with('message','Delete Category Successfully');
    }





}
