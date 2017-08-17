@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Add Constituent</h3>
 
{!! Form::open(['method' => 'POST', 'action' => 'WordController@store']) !!}
 
  @include('words.form', ['submitButtonText' => 'Add New Word'] )
 
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 