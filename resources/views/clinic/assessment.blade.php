@extends('layouts.app')
@section('content')

<div class="container w-25 text-center">

<form method="POST" action="{{ route('addAssessment',$visitId)}}">
    @csrf
  <div class="mb-3">
      <h1>add assessment</h1>
    <label for="diagnosis" class="form-label">diagnosis</label>
    <input type="text" name="diagnosis" class="form-control bg-white" id="diagnosis" >
  </div>
  <div class="mb-3">
    <label for="prescription" class="form-label">prescription</label>
    <input type="text" name="prescription" class="form-control bg-white" id="prescription">
  </div>
  <div class="mb-3">
    <label for="lab_radTests" class="form-label">lab_radTests</label>
    <input type="text" name="lab_radTests" class="form-control bg-white" id="lab_radTests">
  </div>
  <button type="submit"  class="btn btn-info ">Add<i class="bi bi-arrow-right"></i></button>

</form>
</div>

@endsection