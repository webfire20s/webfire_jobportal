

@extends('admin.layout.main')

@section('title', 'Add Poster')

@section('content')
<div class="card card-primary">
    <div class="card-header">
       <h4>Add Poster</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Enter Description">
        </div>
        <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control" name="poster_url" placeholder="Enter Poster Url">
        </div>
        <div class="form-group">
            <label>Category</label>
            <input type="text" class="form-control" name="category" placeholder="Enter category">
        </div>
        <div class="form-group">
            <label>pdf</label>
            <input type="file" class="form-control" name="pdf" placeholder="Enter pdf">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="title" placeholder="Enter Image">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection