@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $constituent->constituency }} </h3>
 
{!! Form::model($constituent,['method' => 'PATCH', 'action' => ['ConstituentController@update', $constituent->id]]) !!}
 
  @include('constituents.form', ['submitButtonText' => 'Update Constituent'] )
 
{!! Form::close() !!}
 @include('layouts.error')
</div>
@endsection 