@extends('admin.master_layout.master')

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <h2 class="text-center fw-bold text-danger">Add Category</h2>
                    <hr>
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" placeholder="Category Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image" placeholder="Password input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label for=""><input name="status" type="radio" value="1" checked> Published</label>
                                <label for=""><input name="status" type="radio" value="0"> Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <input type="submit" class="btn btn-success" placeholder="" value="Create New Category">
                            </div>
                        </div>
                    </form>

                    <p class="text-primary text-center">{{session('message')}}</p>
                </div>
            </div>
        </div>
    </section>


@endsection
