<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function addBlog(){
        $this->categories = Category::all();
        return view('admin.blog.add',['categories'=>$this->categories]);
    }
    public function store(Request $request){
        Blog::newBlog($request);
        return back()->with('message','Add blog Successfully');
    }
    public function manageBlog(){
        $this->blogs = Blog::all();
        return view('admin.blog.manage',['blogs' => $this->blogs]);
    }
    public function edit($id){
        $this->blog = Blog::find($id);
        return view('admin.blog.edit',['blog' => $this->blog]);
    }
    public function update(Request $request,$id){
        Blog::updateBlog($request,$id);
        return redirect('/blog/manage')->with('message','Update Info Successfully');
    }
    public function delete($id){
        Blog::deleteBlog($id);
        return back()->with('message','Delete blog Successfully');
    }

}
