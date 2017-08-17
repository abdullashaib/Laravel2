@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Shehia in Constituency</h2>
  
  @if(count($shehias))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Shehia</th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($shehias as $shehia)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/shehias/{{ $shehia->id }}/edit">{{ $shehia->name }}</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection