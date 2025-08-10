@extends('layout.layout')

@section('page')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <p class="card-description">
                        Courses <code>Manage Courses</code>
                    </p>
                    <div class="row">
                        @if(Session::get('success'))
                        <div class="col alert alert-success" role="alert">
                            {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Duration</th>
                                    <th>Fees</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->category->name}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->duration}}</td>
                                    <td>Rs.{{$row->fee}}</td>
                                    <td><img src="{{url('productImage', $row->image)}}" alt="No Image"></td>
                                    <td>{{$row->description}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                        <a href="{{route('product.edit', $row->id)}}" class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                            &nbsp;
                                        <a class="btn btn-outline-danger btn-sm">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection