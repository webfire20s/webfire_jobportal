@extends('admin.layout.main')

@section('content')
    <div class="container py-4">
        <div class="card shadow-lg mx-auto" style="max-width: 800px;">
            <div class="card-header bg-info text-white">
                <h1 class="card-title h3 mb-0">Edit Team Member: {{ $member->name }}</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.teams.update', $member) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('admin.teams.form', ['member' => $member])

                    <div class="mt-4">
                        <button type="submit" class="btn btn-info text-white w-100 py-2">
                            Update Member
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
