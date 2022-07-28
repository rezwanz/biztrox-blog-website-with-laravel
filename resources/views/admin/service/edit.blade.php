@extends('admin.master')
@section('title')
    Add Service
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Update Service</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-service', ['id' => $service->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Service Category Name</label>
                                    <div class="col-md-8">
                                        <select name="service_category_id" id="" class="form-control">
                                            <option value="" selected disabled>Select a Service</option>
                                            @foreach($serviceCategories as $serviceCategory)
                                                <option value="{{ $serviceCategory->id }}" {{ $service->service_category_id == $serviceCategory->id ? 'selected' : '' }}>{{ $serviceCategory->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Service Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{ $service->title }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Service Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control" id="" cols="30" rows="10">{{ $service->short_description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Service Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control" id="editor" cols="30" rows="10">{!! $service->long_description !!}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Service Feature Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset($service->image) }}" style="height: 100px; width: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $service->status == 1 ? 'checked' : '' }} value="1" checked>Published</label>
                                        <label for=""><input type="radio" name="status" {{ $service->status == 0 ? 'checked' : '' }} value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Service">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
