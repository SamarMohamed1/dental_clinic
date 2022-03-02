@extends('layouts.app')
@section('content')

<div class="container w-25 text-center">

<form method="POST" action="{{ route('finalBill',$visitId,$billId)}}">
    @csrf
  <div class="mb-3">
      <h1>you want to add procedure..</h1>

     

      <select class="form-select" name="procedure" aria-label="Default select example">
      <option selected disabled>select procedure</option>

      @foreach($procedures as procedure)
        <option value="{{procedure['name]}}">{{procedure['name]}}</option>
     @endforeach

     </select>


  </div>

  <button type="submit"  class="btn btn-info ">Add<i class="bi bi-arrow-right"></i></button>

</form>
</div>

@endsection