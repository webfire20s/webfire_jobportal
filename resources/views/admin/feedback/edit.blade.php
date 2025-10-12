@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h2>Edit Feedback: {{ $feedback->name }}</h2>
        <form action="{{ route('feedbacks.update', $feedback) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.feedback._form', ['feedback' => $feedback])
        </form>
    </div>
@endsection