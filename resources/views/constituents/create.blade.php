@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Add Constituent</h3>
 
{!! Form::open(['method' => 'POST', 'action' => 'ConstituentController@store']) !!}
 
  @include('constituents.form', ['submitButtonText' => 'Add Constituent'] )
 
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 