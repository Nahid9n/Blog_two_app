@extends('admin.master_layout.master')

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <p class="text-primary text-center">{{session('message')}}</p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>SL</th>
                        <th>Name</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr class="text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$blog->name}}</td>
                            <td>{{$blog->category->name}}</td>
                            <td>{{$blog->description}}</td>
                            <td><img height="100" width="100" src="{{asset($blog->image)}}" alt=""></td>
                            <td>{{$blog->status}}</td>
                            <td>
                                <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success mx-1"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="{{route('blog.delete',['id'=>$blog->id])}}" onclick="return confirm('Are You sure to Delete').submit()" class="btn btn-danger mx-1"><i class="fa-solid fa-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
