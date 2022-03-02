@extends('layouts.app')

@section('content')
<div class="container w-25 text-center">
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- <h1 >{{ isset($message) ? 'patient not found' : '' }}</h1> -->

<form method="POST" action="{{ route('patient.store') }}">
    @csrf
  <div class="mb-3">
      <h1>Booking form</h1>
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control bg-white" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" class="form-control bg-white" id="age">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" class="form-control bg-white" id="address">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control bg-white" id="phone">
  </div>
 
  <button type="submit"  class="btn btn-info ">Booking<i class="bi bi-arrow-right"></i></button>

</form>
</div>

@endsection
