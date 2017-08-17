@extends('layouts.master')


@section('content')
 
<div class="form_wrapper">  
 <h3> Editing Word of {{ $word->name }} </h3>
 
{!! Form::model($word,['method' => 'PATCH', 'action' => ['WordController@update', $word->id]]) !!}
 
  @include('words.form', ['submitButtonText' => 'Update Word'] )
 
{!! Form::close() !!}
 @include('layouts.error')
</div>
@endsection 