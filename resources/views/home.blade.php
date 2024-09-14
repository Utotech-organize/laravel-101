@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-header text-center">
          <h4>{{ __('บทความน่าสนใจ') }}</h4>
        </div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <!-- Button Group Aligned to End -->
          <div class="d-flex justify-content-end mb-3">
            <a href="/author/create" class="btn btn-primary me-2">เขียนบทความ</a>
            <a href="/author/blog" class="btn btn-secondary">บทความทั้งหมด</a>
          </div>

          <!-- Responsive Table -->
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center align-middle">
              <thead class="table-dark">
                <tr>
                  <th scope="col">ชื่อบทความ</th>
                  <th scope="col">เนื้อหาบทความ</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($blogs as $item)
                <tr>
                  <td class="fw-bold">{{$item->title}}</td>
                  <td>{!! Str::limit($item->content, 100) !!}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection