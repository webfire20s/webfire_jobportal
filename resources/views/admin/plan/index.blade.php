

@extends('admin.layout.main')

@section('title', 'Plan')

@section('content')
<div class="container">
    <!-- Check if there is a success message in the session -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card card-primary">
        <div class="card-header">
            <a href="{{ asset('admin/plan/add') }}" class="btn btn-success" style="float:right">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-stripped table-bordered datatable">
                <thead>
                    <th>#</th>
                    <th>Plan Name</th>
                    <th>Price</th>
                    <th>Duration (in Months)</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                    <tr>
                        <td>{{ $loop->iteration }}</td> <!-- Row number -->
                        <td>{{ $plan->name }}</td> <!-- Plan name from database -->
                        <td>{{ $plan->price }}</td> <!-- Plan price from database -->
                        <td>{{ $plan->duration }}</td> <!-- Plan price from database -->
                        <td>{{ $plan->description }}</td> <!-- Plan description from database -->
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ url('admin/plan/edit/' . $plan->id) }}" class="btn btn-warning">Edit</a>
                            
                            <!-- Delete Button/Form -->
                            <form action="{{ route('plans.destroy', $plan->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this plan?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection