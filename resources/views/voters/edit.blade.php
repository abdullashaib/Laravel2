@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $voter->fullname }}</h3>
 
{!! Form::model($voter, ['method' => 'PATCH', 'action' => ['VoterController@update', $voter->id]]) !!}
 
  @include('voters.form', ['submitButtonText' => 'Update Voter'])
  
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 