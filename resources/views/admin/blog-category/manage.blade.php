@extends('admin.master')
@section('title')
    Manage Blog Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($blogCategories as $blogCategory)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blogCategory->category_name }}</td>
                                    <td>{{ $blogCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-category', ['id' => $blogCategory->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('delete-category', ['id' => $blogCategory->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure? You want to delete this blog?')">Delete</a>
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
