@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Add New Shehia</h3>
 
{!! Form::open(['method' => 'POST', 'action' => 'ShehiaController@store']) !!}
 
  @include('shehias.form', ['submitButtonText' => 'Add Shehia'] )
 
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 