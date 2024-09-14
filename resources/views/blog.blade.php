@extends('layouts.app')
@section('title', 'บทความทั้งหมด')
@section('content')
@if (count($blogs) > 0)

<div class="d-flex justify-content-between align-items-center mb-4">
  <!-- Left-aligned button -->
  <a href="javascript:history.back()" class="btn btn-secondary btn-sm" style="border-radius: 20px; padding: 5px 15px;">
    ← กลับไปหน้าก่อนหน้า
  </a>

  <!-- Centered title -->
  <h2 class="mx-auto text-center">บทความทั้งหมด</h2>
</div>

<div class="table-responsive">
  <table class="table table-hover table-bordered text-center align-middle">
    <thead class="table-dark">
      <tr>
        <th scope="col">ชื่อบทความ</th>
        <th scope="col">สถานะ</th>
        <th scope="col">แก้ไขบทความ</th>
        <th scope="col">ลบบทความ</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($blogs as $item)
      <tr>
        <td class="fw-bold">{{$item->title}}</td>
        <td>
          @if ($item->status == true)
          <a href="{{route('change', $item->id)}}" class="btn btn-success btn-sm">เผยแพร่</a>
          @else
          <a href="{{route('change', $item->id)}}" class="btn btn-secondary btn-sm">ฉบับร่าง</a>
          @endif
        </td>
        <td>
          <a href="{{route('edit', $item->id)}}" class="btn btn-warning btn-sm">แก้ไข</a>
        </td>
        <td>
          <a href="{{route('delete', $item->id)}}" class="btn btn-danger btn-sm"
            onclick="return confirm('คุณต้องการลบบทความ {{$item->title}} หรือไม่ ?')">ลบ</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="d-flex justify-content-center">
  {{$blogs->links()}}
</div>

@else
<h2 class="text text-center py-2">ไม่มีบทความในระบบ</h2>
@endif
@endsection