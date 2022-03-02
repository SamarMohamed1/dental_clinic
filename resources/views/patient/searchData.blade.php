@extends('layouts.app')

@section('content')

<div>

@if($flag =='patient')         
<h1>patient info </h1>
          @foreach ($patients as $patient)
<ul>
                <li>{{ $patient->name }}</li>
                <li>{{ $patient->phone }}</li>
                <li>{{ $patient->address }}</li>
                <li>{{ $patient->age }}</li>
</ul>
            @endforeach
            <a class="btn btn-info" href="{{route('toVisit')}}">Add Visit</a>
  @else
  <div class="container w-25 text-center">
      <h1 class="text-center">{{ $message }}</h1>     
      <a class="btn btn-info " href="{{route('home')}}">Add new Patient</a>  
  </div> 
@endif

           
</div>



                

@endsection

