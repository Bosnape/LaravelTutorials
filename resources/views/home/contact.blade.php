@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-6 ms-auto">
      <p class="lead">Email: {{ $viewData["email"] }}</p>
      <p class="lead">Phone: {{ $viewData["phone"] }}</p>
      <p class="lead">Address: {{ $viewData["address"] }}</p>
    </div>
    <div class="col-lg-6 me-auto">
      <p class="lead">{{ $viewData["author"] }}</p>
    </div>
  </div>
</div>
@endsection
