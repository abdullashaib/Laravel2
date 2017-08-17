@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Roles</h3>
 
{!! Form::open(['method' => 'POST', 'action' => 'RoleController@store']) !!}
 
  @include('roles.form', ['submitButtonText' => 'Add Role'] )
 
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 