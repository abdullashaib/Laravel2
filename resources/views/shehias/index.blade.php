@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Shehia</h2>
  @if(count($shehias))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Shehia</th>
          <th>Word</th>
          <th>Constituent</th>
          <th>Residents</th>
          <th>Registered</th>
          <th></th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($shehias as $shehia)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/shehias/{{ $shehia->id }}/edit">{{ $shehia->name }}</a></td>
           <td>{{ $shehia->word['name'] }} </td>
           <td>{{ $shehia->constituent->constituency }} </td>
           <td>{{ $shehia->residents }} </td>
           <td>{{ $shehia->registered }} </td>
          <td><a href="shehias/{{ $shehia->id }}/edit"> Edit</a> &nbsp;&nbsp;<a href="shehias/{{ $shehia->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $shehia->name}}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection