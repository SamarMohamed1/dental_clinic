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
<form method="POST" action="{{ route('patient.visit',$patientId) }}">
    @csrf
  <div class="mb-3">

      <h1>Add Visit</h1>
    <label for="date" class="form-label">Date</label>
    <input type="date" name="date" class="form-control bg-white" id="date" >
  </div>

  <div class="mb-3">
    <label for="time" class="form-label">Time</label>
    <input type="time" name="time" class="form-control bg-white" id="time">
  </div>

  <div class="mb-3">
  <label for="time" class="form-label">Type</label>
  <select class="form-select bg-white" name="type" aria-label="Default select example" >
  <option selected disabled>Type of visit</option>
  <option value="Examination">Examination</option>
  <option value="Consultation">Consultation</option>
 </select>
  </div>
 
  <button type="submit"  class="btn btn-info ">Add Visit</button>
</form>


</div>

@endsection

