@extends('admin.layout.main')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create New Service</h1>
        {{-- Include the form component --}}
        @include('admin.services._form', ['service' => new App\Models\Service()])
    </div>
@endsection
