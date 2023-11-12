@extends('admin.master_layout.master')

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <h2 class="text-center fw-bold text-danger">Add Blog</h2>
                    <hr>
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blog Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Blog Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control" id="">
                                    <option value="">--select Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blog Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Blog Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blog Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" name="image" placeholder="Password input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication Status</label>
                            <div class="col-sm-10">
                                <label for=""><input name="status" type="radio" value="1" checked> Published</label>
                                <label for=""><input name="status" type="radio" value="0"> Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-success" placeholder="" value="Create New Blog">
                            </div>
                        </div>
                    </form>

                    <p class="text-primary text-center">{{session('message')}}</p>
                </div>
            </div>
        </div>
    </section>


@endsection
