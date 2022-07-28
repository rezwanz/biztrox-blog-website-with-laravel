@extends('admin.master')
@section('title')
    Manage Service
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
                            @foreach($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->serviceCategory->category_name }}</td>
                                    <td>{{ $service->short_description }}</td>
                                    <td>{!! \Illuminate\Support\Str::words($service->long_description, 30, '...') !!}</td>
                                    <td>
                                        <img src="{{ asset($service->image) }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td>{{ $service->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-service', ['id' => $service->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('delete-service', ['id' => $service->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure? You want to delete this service?')">Delete</a>
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
