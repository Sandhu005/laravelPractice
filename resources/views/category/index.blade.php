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
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>53275531</td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                    <td>
                                        <button class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                            &nbsp;
                                        <button class="btn btn-outline-danger btn-sm">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection