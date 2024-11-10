@extends('admin.layout.main')

@section('title', 'Home Page')

@section('content')
<form method="POST" action="{{ url('admin/plan/store') }}" enctype="multipart/form-data">
    @csrf <!-- Always include CSRF token in Laravel forms -->
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

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Plan Name -->
                <div class="form-group">
                    <label for="name">Plan Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <!-- Plan Price -->
                <div class="form-group">
                    <label for="price">Plan Price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                </div>

                <!-- Plan Description -->
                <div class="form-group">
                    <label for="description">Plan Description:</label>
                    <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
                </div>

                <!-- Plan Duration -->
                <div class="form-group">
                    <label for="duration">Plan Duration (Months):</label>
                    <input type="number" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" required>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-success" id="save">Save</button>
            </div>
        </div>
    </div>
</form>

@endsection
