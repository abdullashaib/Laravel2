@extends('layouts.master')


@section('content')

<div class="form_wrapper">

  <h2>List of Words</h2>
  @if(count($words))
    
    <table class="table table-bordered">
        <tr class="thead-inverse">
          <th> # </th>
          <th>Word</th>
          <th>Constituent</th>
          <th></th>
        </tr>
      <?php $i = 1 ?> 
      @foreach($words as $word)
        
        <tr> 
          <td> {{ $i }} </td>
          <td><a href="/voters/{{ $word->id }}/votersListword">{{ $word->name }}</a></td>
          <td>{{ $word->constituent['constituency'] }} </td>
          <td><a href="words/{{ $word->id }}/edit"> Edit</a> &nbsp;&nbsp;<a href="words/{{ $word->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure you want to delete?"+ {{ $word->name}}">Delete</a></td>
        </tr>
         <?php $i++ ?>  
      @endforeach
     
    </table>
  @else 
    <h3>No records to display at the moment</h3>
  @endif
</div>
@endsection