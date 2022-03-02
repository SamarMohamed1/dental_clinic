@extends('layouts.app')
@section('content')
<table class="table">
  <thead>

    <tr>
      <th>count</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
   
    </tr>
  </thead>
  @php
  $count=0;
  @endphp
  
  @foreach ($data as $item)
  <tbody>
    <tr>
      <td>{{$count+=1}}</td>
      <td>{{ $data['name'] }}</td>
      <td>{{ $data['price'] }}</td>

    </tr>
  </tbody>
  @endforeach
</table>
@endsection