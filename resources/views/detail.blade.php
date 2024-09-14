@extends('layouts.app')
@section('title')
{{$blog->title}}
@endsection
@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <!-- Back Button -->
      <div class="mb-4">
        <a href="javascript:history.back()" class="btn btn-secondary btn-sm"
          style="border-radius: 20px; padding: 5px 15px;">
          ← กลับไปหน้าก่อนหน้า
        </a>
      </div>

      <!-- Hero Section for Blog Title -->
      <section class="hero-section"
        style="background: url('/path/to/your/image.jpg') center center/cover no-repeat; height: 40vh; position: relative;">
        <div class="hero-overlay"
          style="background-color: rgba(0, 0, 0, 0.6); height: 100%; width: 100%; position: absolute; top: 0; left: 0;">
        </div>
        <div class="container text-center text-white d-flex align-items-center justify-content-center"
          style="height: 100%; z-index: 1; position: relative;">
          <div>
            <h1 class="display-3 font-weight-bold">{{$blog->title}}</h1>
            <p class="lead">Published on {{ date('F j, Y', strtotime($blog->created_at)) }}</p>
          </div>
        </div>
      </section>

      <!-- Blog Content Section -->
      <section class="blog-content-section my-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <div class="blog-content p-4 text-start">
                {!! $blog->content !!}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection