@extends('admin.layout.main')

@section('content')
    <div class="container py-4">
        <div class="card shadow-lg mx-auto" style="max-width: 800px;">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title h3 mb-0">Add New Team Member</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('admin.teams.form', ['member' => new \App\Models\TeamMember()])

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success w-100 py-2">
                            Save Member
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
