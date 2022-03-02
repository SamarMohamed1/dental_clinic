@extends('layouts.app')
@section('content')

<div class="container w-25 text-center">

<form method="POST" action="{{ route('add.procedure')}}">
    @csrf
  <div class="mb-3">
      <h1>add procedure</h1>
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control bg-white" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="number" name="price" class="form-control bg-white" id="price">
  </div>
  <button type="submit"  class="btn btn-info ">Add<i class="bi bi-arrow-right"></i></button>

</form>
</div>

@endsection