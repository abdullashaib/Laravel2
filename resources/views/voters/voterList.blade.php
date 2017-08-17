@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Voters in Polling Station</h2>
  @if(count($roles))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Role</th>
          <th>Description</th>
          <th></th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($roles as $role)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/roles/{{ $role->id }}/edit">{{ $role->name }}</a></td>
          <td>{{ $role->description }}</td>
          <td><a href="roles/{{ $role->id }}/edit"> Edit</a> &nbsp;&nbsp;<a href="roles/{{ $role->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $role->name}}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection