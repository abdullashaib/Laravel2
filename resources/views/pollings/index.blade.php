@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Polling Station</h2>
  @if(count($pollings))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Polling Station</th>
          <th>Number</th>
          <th>Shehia</th>
          <th>Constituent</th>
          <th></th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($pollings as $polling)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/pollings/{{ $polling->id }}/edit">{{ $polling->name }}</a></td>
           <td>{{ $polling->number }} </td>
           <td>{{ $polling->shehia['name'] }} </td>
           <td>{{ $polling->constituent['constituency'] }} </td>
          <td><a href="pollings/{{ $polling->id }}/edit"> Edit</a> &nbsp;&nbsp;<a href="pollings/{{ $polling->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $polling->name}}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection