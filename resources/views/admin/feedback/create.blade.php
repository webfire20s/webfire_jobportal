@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h2>Add New Feedback</h2>
        <form action="{{ route('feedbacks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.feedback._form')
        </form>
    </div>
@endsection