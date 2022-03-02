@extends('layouts.app')
@section('content')
<div class="container">

@php
$data=json_decode(json_encode(data),true)
@endphp

<div class="card">
  <div class="card-header">
    first bill
  </div>
  <div class="card-body">
      <h3>{{ $data['visit']['patientInfo']['name'] }}</h3>
      <h3>{{ $data['visit']['patientInfo']['age'] }}</h3>
      <h3>{{ $data['visit']['patientInfo']['address'] }}</h3>
      <h3>{{ $data['visit']['patientInfo']['phone'] }}</h3>
      <h3>{{ $data['visit']['time'] }}</h3>
      <h3>{{ $data['visit']['date'] }}</h3>
      <h3>{{ $data['visit']['type'] }}</h3>

  </div>
</div>


<a href="{{route('first.bill',$visitId)}}" class="btn btn-info">make second bill </a>
</div>
@endsection