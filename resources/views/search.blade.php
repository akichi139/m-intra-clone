@extends('layouts.app')

@section('content')
<div class="mx-auto" style="max-width: 80%;">
    @if($searchProducts->count()==0)
    <h1>ขออภัย - ไม่พบผลลัพธ์สำหรับ"{{$search}}"</h1>
    <h6>อย่าล้มเลิกความพยายาม! ตรวจสอบตัวสะกด หรือลองใช้คำอื่นที่มีความเฉพาะเจาะจงน้อยกว่านี้</h6>
    @else
    <h6>ผลการค้นหาของคุณสำหรับ:</h6>
    <h1>" {{$search}} "</h1>
    <hr>
    <div class="d-flex justify-content-start align-items-start flex-wrap">
        @foreach($searchProducts as $product)
        @include('product.component.card')
        @endforeach
    </div>
    {!!$searchProducts->links('pagination::bootstrap-5')!!}
    @endif
</div>

@endsection