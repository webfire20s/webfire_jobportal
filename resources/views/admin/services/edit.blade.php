@extends('admin.layout.main')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Service: {{ $service->title }}</h1>
        {{-- Include the form component, passing the existing service data --}}
        @include('admin.services._form', ['service' => $service])
    </div>
@endsection
