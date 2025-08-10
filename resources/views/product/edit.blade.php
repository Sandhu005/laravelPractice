@extends('layout.layout')

@section('page')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <p class="card-description">
                        Update Product
                    </p>
                    <form class="forms-sample" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                         <div class="form-group">
                            <label for="categoryID">Category</label>
                            <select class="form-control" name="categoryId" id="categoryId" required>
                                @foreach($categories as $c)
                                <option value="{{$product->categoryId}}" selected>{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Course Name" value="{{$product->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="duration" name="duration" placeholder="Course Duration" required>
                        </div>
                        <div class="form-group">
                            <label for="fee">Fees</label>
                            <input type="text" class="form-control" id="fee" name="fee" placeholder="Fees" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Uploade Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Description" required></textarea>
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