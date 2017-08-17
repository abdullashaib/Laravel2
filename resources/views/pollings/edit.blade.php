@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $polling->name }} </h3>
 
{!! Form::model($polling,['method' => 'PATCH', 'action' => ['PollingController@update', $polling->id]]) !!}
 
  @include('pollings.form', ['submitButtonText' => 'Update Polling Station'] )
 
{!! Form::close() !!}
 @include('layouts.error')
</div>
@endsection 