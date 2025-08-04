@extends('layout.layout')

@section('page')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <p class="card-description">
                        Add Products
                    </p>
                    <form class="forms-sample">
                         <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="" id="category">
                                <option value="" selected disabled>Select Category</option>
                                <option value="">Web Development</option>
                                <option value="">Cyber Security</option>
                                <option value="">Digital Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Course Name">
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="duration" placeholder="Course Duration">
                        </div>
                        <div class="form-group">
                            <label for="fee">Fees</label>
                            <input type="text" class="form-control" id="fee" placeholder="Fees">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="text" class="form-control" id="image" placeholder="Image">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection