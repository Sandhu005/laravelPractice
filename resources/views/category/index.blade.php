@extends('layout.layout')

@section('page')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <p class="card-description">
                        Category <code>Manage Category</code>
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
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->description}}</td>
                                    <td><img src="{{url('categoryImage', $row->image)}}" alt=""></td>
                                    <td>{{$row->status}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('category.edit', $row->id)}}" class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        &nbsp;

                                        <a class="forms-sample" href="{{route('categoryChangeStatus', $row->id)}}">

                                            @if($row->status =='Active')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Block
                                            </button>
                                            @else
                                                <button type="submit" class="btn btn-outline-success btn-sm">
                                                UNBLOCK
                                            </button>
                                            @endif
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