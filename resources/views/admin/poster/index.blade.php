

@extends('admin.layout.main')

@section('title', 'Poster')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">

            <a href="{{ asset('admin/poster/add') }}" class="btn btn-success" style="float:right">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-stripped table-bordered">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>description</th>
                    <th>Poster URL</th>
                    <th>Categary</th>
                    <th>PDF</th>
                    <th>Image</th>
                    <th>Action</th>
                </thead>
                <tbody>
                
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
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