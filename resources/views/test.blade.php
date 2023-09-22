@extends('layouts.app')

@section('content')

<div class="mx-auto" style="max-width: 80%;">
  @livewire('filter-brand-products', ['brand_name' => $brand->brand_name])
</div>

@endsection

