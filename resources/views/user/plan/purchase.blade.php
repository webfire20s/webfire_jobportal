<!-- resources/views/user/plan/purchase.blade.php -->

@extends('web-layout')
@section('title', 'Payment Page')

@section('content')
<div class="container mt-5">
    <h3>Payment for Plan: {{ $plan->name }}</h3>

<div class="row">
    <div class="col-md-6">
        <!-- Form to upload receipt after payment -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Upload Payment Receipt</h5>
            <form method="POST" action="{{ route('user.plan.uploadReceipt', $transaction->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="receipt">Upload Receipt (JPEG, PNG, PDF only)</label>
                    <input type="file" class="form-control" id="receipt" name="receipt" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary my-4">Submit Receipt</button>
                </div>
                
            </form>
            
            <div class='bank_details'>
            <h4>BANKING DETAILS:-</h4>
            <p>BANK NAME :- UNION BANK OF INDIA</p>
            <p>ADARSH ONLINE SERVICE</p>
            <p>AC - NUMBER - 425101010035063</p>
            <p>IFSC CODE :- UBIN0542512</p>
        </div>
        </div>
    </div>
    
        
    </div>
    <div class="col-md-6">
        <!-- Show the QR code for payment -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Scan this QR Code to Pay</h5>
            <div>
                <!-- You can use a package to generate QR code for UPI link -->
                <img src="{{ asset('public/qr_code.jpg') }}" alt="QR Code">
            </div>
            <p>Scan the QR code and complete the payment using your UPI app.</p>
        </div>
    </div>
    </div>
</div>
    

    
</div>
@endsection
