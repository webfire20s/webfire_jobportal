@extends('admin.layout.main')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header bg-primary text-white">Important Notice</div>
        <div class="card-body">
            <form action="{{ route('admin.settings.updateNotice') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="notice">Notice</label>
                    <textarea name="notice" class="form-control" rows="5"
                        required>{{ $notices->first()->notice ?? '' }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update Notice</button>
            </form>
        </div>
    </div>
</div>
@endsection