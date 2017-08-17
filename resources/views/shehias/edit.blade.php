@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $shehia->name }} </h3>
 
{!! Form::model($shehia,['method' => 'PATCH', 'action' => ['ShehiaController@update', $shehia->id]]) !!}
 
  @include('shehias.form', ['submitButtonText' => 'Update Shehia'] )
 
{!! Form::close() !!}
 @include('layouts.error')
</div>
@endsection 