@extends('admin.master')
@section('title')
    Add Blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Update Blog</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-blog', ['id' => $blog->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Category Name</label>
                                    <div class="col-md-8">
                                        <select name="blog_category_id" id="" class="form-control">
                                            <option value="" selected disabled>Select a Category</option>
                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{ $blogCategory->id }}" {{ $blog->blog_category_id == $blogCategory->id ? 'selected' : '' }}>{{ $blogCategory->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control" id="" cols="30" rows="10">{{ $blog->short_description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control" id="editor" cols="30" rows="10">{!! $blog->long_description !!}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Blog Feature Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset($blog->image) }}" style="height: 100px; width: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $blog->status == 1 ? 'checked' : '' }} value="1" checked>Published</label>
                                        <label for=""><input type="radio" name="status" {{ $blog->status == 0 ? 'checked' : '' }} value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Blog">
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
