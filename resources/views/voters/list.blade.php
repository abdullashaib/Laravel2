@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Voters in Constituent</h2>
  @if(count($voters))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Name</th>
          <th>Date of Birth</th>
          <th>Gender</th>
          <th>Addresss</th>
          <th>Polling Station</th>
          <th>Voting</th>
          <th>Voter Number</th>
          <th>Life Status</th>
          <th></th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($voters as $voter)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/voters/{{ $voter->id }}/edit">{{ $voter->fullname }}</a></td>
          <td>{{ $voter->datebirth }}</td>
          <td>{{ $voter->gender }}</td>
          <td>{{ $voter->residentialaddress }}</td>
          <td>{{ $voter->pollingstation_id }}</td>
          <td>{{ $voter->voterConstituent->constituency }}</td>
          <td>{{ $voter->voterIDnumber }}</td>
          <td>{{ $voter->lifestatus }}</td>
          <td><a href="voters/{{ $voter->id }}/edit"> Edit</a> &nbsp;&nbsp;<a href="voters/{{ $voter->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $voter->firstname}}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection