@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body text-center">
          <h4 class="card-title text-success">Success!</h4>
          <p class="card-text">{{ $viewData["message"] }}</p>
          <a href="{{ route('product.index') }}" class="btn btn-primary">Back to Products</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
