 
<div class="form-group row">
  {!! Form::label('name', 'Name:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
</div>
  
<div class="form-group row">
  {!! Form::label('description', 'Description:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
  </div>
</div>
 
<div class="form-group row">
  {!! Form::label('', '', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
  
