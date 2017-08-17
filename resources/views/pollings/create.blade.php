@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Add Polling Station</h3>
 
{!! Form::open(['method' => 'POST', 'action' => 'PollingController@store']) !!}
 
  @include('pollings.form', ['submitButtonText' => 'Add Polling Station'] )
 
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 