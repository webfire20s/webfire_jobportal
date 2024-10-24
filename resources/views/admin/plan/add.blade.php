

@extends('admin.layout.main')

@section('title', 'Home Page')

@section('content')
<form method="POST" action="{{ url('admin/poster/store') }}" enctype="multipart/form-data">
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Plans</h4>
        </div>
        <div class="card-body">
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Error Message -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="form-group">
                <label for="name">Plan Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="name">Plan Price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="name">Plan Description:</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-success" id="save">Save</button>
        </div>
    </div>
</div>
</form>
@endsection