@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Polling Stations in Constituency</h2>
  
  @if(count($pollings))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Polling Station</th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($pollings as $polling)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/voters/{{ $polling->id }}/votersList">{{ $polling->name }}</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection