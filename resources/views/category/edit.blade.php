@extends('layout.layout')

@section('page')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <p class="card-description">
                        Update Category
                    </p>
                    <form class="forms-sample" action="{{route('category.update', $category->id)}}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{$category->name}}" class="form-control" id="name" name="name" placeholder="Category Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Description">{{$category->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="newImage">Upload Image</label>
                            <input type="file" class="form-control" id="newImage" name="newImage">
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{$category->image}}" class="form-control" id="oldImage" name="oldImage">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection