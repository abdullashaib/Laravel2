@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Voters Registration</h3>
 
{!! Form::open(['method' => 'POST', 'action' => 'VoterController@store']) !!}
 
  @include('voters.form', ['submitButtonText' => 'Add New Voter'] )
 
{!! Form::close() !!}

 @include('layouts.error')
</div>
@endsection 