@extends('layouts.app')
@section('content')




<table class="table">
  <thead>

    <tr>
      <th>count</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col">time</th>
      <th scope="col">date</th>
      <th scope="col">type</th>
      <th scope="col">type</th>

    </tr>
  </thead>
  @php
  $count=0;
  @endphp
  

     @php
       $data = json_decode(json_encode($data), true);
     @endphp
  <tbody>
    <tr>
      <td>{{$count+=1}}</td>
      <td>{{ $data['visit']['patientInfo']['name'] }}</td>
      <td>{{ $data['visit']['patientInfo']['age'] }}</td>
      <td>{{ $data['visit']['patientInfo']['address'] }}</td>
      <td>{{ $data['visit']['patientInfo']['phone'] }}</td>
      <td>{{ $data['visit']['time'] }}</td>
      <td>{{ $data['visit']['date'] }}</td>
      <td>{{ $data['visit']['type'] }}</td>
      <td>{{ $data['visit']['price'] }}</td>

    </tr>
  </tbody>
</table>

@endsection

