@extends('admin.master')
@section('title')
    Edit Service Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Edit Service Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-service-category', ['id' => $serviceCategory->id]) }}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" value="{{ $serviceCategory->category_name }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $serviceCategory->status == 1 ? 'checked' : '' }} value="1">Published</label>
                                        <label for=""><input type="radio" name="status" {{ $serviceCategory->status == 0 ? 'checked' : '' }} value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Service Category Content">
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
