@extends('admin.master')
@section('title')
    Add Blog Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Blog Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-blog-category') }}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control /">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1" checked>Published</label>
                                        <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Add Blog Content">
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
