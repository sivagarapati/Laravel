@extends('layouts.master')
@section('content')
<!-- <div class="row">
<div class="col-md-12">
    <h1>Hello World!</h1>
     @if(true)
        <p>only displays if true</p>
    @else
        <p>only displays if flase</p>
    @endif
    <hr>
    @for($i=0;$i<5;$i++)
    <p>{{$i +1}}.Iteration</p>
    @endfor
    <hr>
    <h2>XSS</h2>
    {{"<script>alert('Hello')</script>"}}
    {!!"<script>alert('Hello')</script>"!!}  
</div>
</div> -->
<div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Learning Laravel</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="{{route('blog.post',['id'=>1]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">The next Steps</h1>
            <p>Understanding the Basics is great, but you need to be able to make the next steps.</p>
            <p><a href="{{route('blog.post',['id'=>2]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Laravel 5.3</h1>
            <p>Though announced as a "minor release", Laravel 5.3 ships with somer very interesting additions and features.</p>
            <p><a href="{{route('blog.post',['id'=>3]) }}">Read more...</a></p>
        </div>
    </div>
@endsection