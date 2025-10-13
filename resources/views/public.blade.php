<!-- resources/views/public.blade.php -->

@extends('web-layout')

@section('title', $page->title)
@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_tags)
@section('meta_image', asset('storage/app/public/' . $page->feature_image))

@section('content')
<section id="billboard">
    <div class="container-fluid">
        <img src="{{ asset('storage/app/public/' . $page->feature_image) }}" class="d-block mx-lg-auto img-fluid"
            alt="Bootstrap Themes" style="width:100%;height:300px;" loading="lazy">
    </div>
</section>
<section>
    <div class="container">
        <h1>{{ ucwords($page->title) }}</h1>
        <div class="content">
            {!! $page->content !!}
        </div>
    </div>
</section>
@endsection