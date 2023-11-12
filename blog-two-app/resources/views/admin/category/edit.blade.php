@extends('admin.master_layout.master')

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <h2 class="text-center fw-bold text-danger">Edit Category Info</h2>
                    <hr>
                    <form action="{{route('category.update',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" placeholder="Category Description">{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image" placeholder="Password input">
                                <img class="" height="100" width="120" src="{{asset($category->image)}}" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label for=""><input name="status" type="radio" value="1" {{$category->status == 1 ? 'checked' :''}} checked> Published</label>
                                <label for=""><input name="status" type="radio" {{$category->status == 0 ? 'checked' :''}} value="0"> Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <input type="submit" class="btn btn-success" placeholder="" value="Update Category Info">
                            </div>
                        </div>
                    </form>

                    <p class="text-primary text-center">{{session('message')}}</p>
                </div>
            </div>
        </div>
    </section>


@endsection
