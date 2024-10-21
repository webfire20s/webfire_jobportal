

@extends('admin.layout.main')

@section('title', 'Plan')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
        <a href="{{ asset('admin/plan/add') }}" class="btn btn-success" style="float:right">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-stripped table-bordered">
                <thead>
                    <th>#</th>
                    <th>Plan Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection