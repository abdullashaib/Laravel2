@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $role->name }}</h3>
 
{!! Form::model($role, ['method' => 'PATCH', 'action' => ['RoleController@update', $role->id]]) !!}
 
  @include('roles.form', ['submitButtonText' => 'Update Role'])
  
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 