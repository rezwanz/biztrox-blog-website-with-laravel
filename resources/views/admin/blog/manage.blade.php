@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <table class="table table-bordered table-responsive" id="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Long Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->blogCategory->category_name }}</td>
                                    <td>{{ $blog->short_description }}</td>
                                    <td>{!! \Illuminate\Support\Str::words($blog->long_description, 30, '...') !!}</td>
                                    <td>
                                        <img src="{{ asset($blog->image) }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('delete-blog', ['id' => $blog->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure? You want to delete this blog?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
