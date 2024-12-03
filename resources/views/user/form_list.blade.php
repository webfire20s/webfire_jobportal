@extends('web')  <!-- Assuming you have a layout file named 'web' -->

@section('content')
<style>
    tr > th, tr > td {
        color: #fff; /* White text color */
    }
    .table {
        border-collapse: separate;
        border-spacing: 0 15px;
        width: 100%;
    }

    .table th, .table td {
        background-color: #2d3436;
        padding: 12px 15px;
        border-radius: 8px;
        text-align: center;
    }

    .table th {
        background-color: #ff4757;  /* Red background for headers */
        color: #fff;
    }

    .table td {
        color: #ddd; /* Light gray text for data */
    }

    .btn-download {
        color: #fff;
        background-color: #0984e3;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
    }

    .btn-download:hover {
        background-color: #74b9ff;
    }

    .file-icon {
        width: 30px;
        margin-right: 8px;
    }

    h3 {
        color: #ff4757;
        font-weight: bold;
    }

    .alert {
        margin-bottom: 1rem;
        font-weight: bold;
    }
</style>

<div class="container" style="margin-top:10rem !important;">
    <h3 class="text-center">ALL FORMS</h3>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Form Description</th>
                    <th>File</th>
                    <th>File Size (KB)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($forms as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>  <!-- Loop to show Serial Number -->
                        <td>{{ $form->form_description }}</td>  <!-- Show form description -->
                        <td>
                            <a href="{{ asset('storage/app/public/'.$form->document_path) }}" class="" target="_blank">
                                <img src="{{ asset('public/theme/web/pdf.svg') }}" class="file-icon" /> 
                            </a>
                        </td>
                        <td>{{ $form->file_size }} KB</td>  <!-- Show file size -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
