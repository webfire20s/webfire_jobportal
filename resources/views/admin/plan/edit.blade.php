@extends('admin.layout.main')

@section('title', 'Edit Plan')

@section('content')
<form method="POST" action="{{ route('admin.plan.update', $plan->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Use PUT method for updating resources -->

    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Plan</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

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
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $plan->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Plan Price -->
                <div class="form-group">
                    <label for="price">Plan Price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $plan->price) }}" required>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Plan Description -->
                <div class="form-group">
                    <label for="description">Plan Description:</label>
                    <textarea class="form-control" id="description" name="description" required>{{ old('description', $plan->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Plan Duration -->
                <div class="form-group">
                    <label for="duration">Plan Duration (Months):</label>
                    <input type="number" class="form-control" id="duration" name="duration" value="{{ old('duration', $plan->duration) }}" required>
                    @error('duration')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" id="save">Update</button>
            </div>
        </div>
    </div>
</form>
@endsection
