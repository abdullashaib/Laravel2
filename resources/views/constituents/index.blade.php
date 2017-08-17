@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Constituents</h2>
  @if(count($constituents))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Constituent</th>
          <th></th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($constituents as $constituent)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/constituents/{{ $constituent->id }}/edit">{{ $constituent->constituency }}</a></td>
          <td><a href="constituents/{{ $constituent->id }}/edit"> Edit</a> &nbsp;&nbsp;<a href="constituents/{{ $constituent->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $constituent->constituency}}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection