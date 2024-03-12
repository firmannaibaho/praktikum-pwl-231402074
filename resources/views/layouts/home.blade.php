@extends('layouts.layout')

@section('content')

<div class="card w-96 bg-base-100 shadow-xl">
  <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title">
      Shoes!
      <div class="badge badge-secondary">NEW</div>
    </h2>
    <p>If a dog chews shoes whose shoes does he choose?</p>
    <div class="card-actions justify-end">
      <div class="badge badge-outline hover:bg-red-500">Fashion</div> 
      <div class="badge badge-outline hover:bg-sky-400">Products</div>
    </div>
  </div>
</div>
@endsection('content')