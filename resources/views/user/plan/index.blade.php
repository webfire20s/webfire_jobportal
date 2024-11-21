@extends('web')

@section('title', 'Available Plans')

@section('content')
<div class="container mt-4">
    <h2>Available Plans</h2>

    <div class="row">
        @foreach($plans as $plan)
                <div class="col-md-4">
                    <div class="card card-primary mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plan->name }}</h5>
                            <p class="card-text">{{ $plan->description }}</p>
                            <p class="card-text">Price: ₹{{ $plan->price }}</p>
                            <p class="card-text">Duration: {{ $plan->duration }} months</p>

                            <!-- Check if user has an active plan -->
                            @php
                                $userHasActivePlan = \App\Helpers\SubscriptionHelper::isActive(auth()->id());
                            @endphp
                            <!-- If the user has no active plan, show the purchase button -->
                            @if(!$userHasActivePlan)
                                <form method="POST" action="{{ route('user.plan.purchase', $plan->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Purchase Plan</button>
                                </form>
                            @else
                                <p class="mt-3 text-warning">You already have an active plan. Please renew after expiration.</p>
                            @endif
                        </div>
                    </div>
                </div>
        @endforeach
    </div>

    <div class="col-md-12">
        @if(isset($userHasActivePlan) && $userHasActivePlan)
            <center><a href="{{ url('user') }}" class="btn btn-sm btn-primary mb-4">Go to dashboard</a></center>
        @endif
    </div>
</div>

<div class="container">
    <h2>Your Transaction History</h2>

    <!-- Check if there are any transactions -->
    @if($transactions->isEmpty())
        <p class="text-danger">You have no transaction history.</p>
    @else
        <style>
            tr>th {
                color: white;
            }

            tr>td {
                color: white !important;
            }
        </style>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr>
                            <th>Plan Name</th>
                            <th>Price</th>
                            <th>Duration (Months)</th>
                            <th>Purchase Date</th>
                            <th>Status</th>
                            <th>Receipt</th> <!-- Add a column for the receipt -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->name }}</td>
                                <td>₹{{ $transaction->price }}</td>
                                <td>{{ $transaction->month }} months</td>
                                <td>{{ $transaction->purchase_date->format('d M Y') }}</td>
                                <td>{{ $transaction->status }}</td>
                                <td>
                                    @if($transaction->receipt_url)
                                        <!-- If receipt URL exists, show a button to view/download -->
                                        <a href="{{ url("storage/app/public/".$transaction->receipt_url) }}" class="btn btn-info btn-sm"
                                            target="_blank">View Receipt</a>
                                    @else
                                        <!-- If no receipt uploaded, show a message or button -->
                                        <span class="text-warning">No receipt uploaded</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endif
</div>
@endsection