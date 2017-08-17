@extends('layouts.layout')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing {{ $constituent->constituency }} </h3>
 
{!! Form::model($word,['method' => 'PATCH', 'action' => ['WordController@update', $word->id]]) !!}
 
  @include('constituents.form', ['submitButtonText' => 'Update Word'] )
 
{!! Form::close() !!}
 @include('layouts.error')
</div>
@endsection 