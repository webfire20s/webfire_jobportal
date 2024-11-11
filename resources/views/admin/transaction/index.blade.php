@extends('admin.layout.main')

@section('title', 'Transaction')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <i class="fa fa-list"></i> Transactions
        </div>
        <div class="card-body">
            <table class="table table-stripped table-bordered datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Plan</th>
                        <th>Receipt URL</th>
                        <th>Month</th>
                        <th>Price</th>
                        <th>Purchase Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $transaction->user->name ?? 'N/A' }}</td>
                        <td>{{ $transaction->plan->name ?? 'N/A' }}</td>
                        <td><a href="{{ url("storage/app/public/".$transaction->receipt_url) }}" target="_blank" class="btn btn-sm btn-info text-white">View Receipt</a></td>
                        <td>{{ $transaction->month }}</td>
                        <td>{{ $transaction->price }}</td>
                        <td>{{ $transaction->purchase_date->format('Y-m-d') }}</td>
                        <td>{{ ucfirst($transaction->status) }}</td>
                        <td>
                            <!-- You can add edit or delete buttons here -->
                             @if( $transaction->status == 'pending' )
                            <a href="{{ route('transaction.approve', $transaction->id) }}" class="btn btn-success btn-sm">Approve</a>
                            <a href="{{ route('transaction.reject', $transaction->id) }}" class="btn btn-danger btn-sm">Reject</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
