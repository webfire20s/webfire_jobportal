

@extends('admin.layout.main')

@section('title', 'Transaction')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <i class="fa fa-list"></i>
        </div>
        <div class="card-body">
            <table class="table table-stripped table-bordered">
                <thead>
                    <th>#</th>
                    <th>Transaction</th>
                    <th>User Id</th>
                    <th>Plan Id</th>
                    <th>Receipt URL</th>
                    <th>Month</th>
                    <th>Price</th>
                    <th>Purchase Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection