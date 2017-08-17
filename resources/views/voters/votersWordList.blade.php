@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Voters in Word</h2>
  @if(count($voters))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Full Name</th>
          <th>Gender</th>
          <th>Date of Birth</th>
          <th>Address</th>
          <th>Polling Station</th>
          <th>Constituent</th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($voters as $voter)
        
        <tr> 
          <td> {{ $i }} </td>
          <td>{{ $voter->fullname }}</a></td>
          <td>{{ $voter->gender }}</td>
          <td>{{ $voter->datebirth }}</td>
          <td>{{ $voter->residentialaddress }}</td>
          <td>{{ $voter->voterPollingstation['name'] }}</td>
          <td>{{ $voter->voterConstituent['constituency'] }}</td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection