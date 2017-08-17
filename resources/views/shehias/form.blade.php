 
<div class="form-group row">
  {!! Form::label('name', 'Shehia Name:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('word_id', 'Word Name:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('word_id', $words, null, ['placeholder' => 'Select word...', 'class' => 'form-control']) !!}
  </div>
</div>
  
<div class="form-group row">
  {!! Form::label('constituency_id', 'Constituent:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('constituency_id', $constituents, null, ['placeholder' => 'Select constituent...', 'class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('residents', 'Total Residents:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::number('residents', null, ['class' => 'form-control']) !!}
  </div>
</div>


<div class="form-group row">
  {!! Form::label('registered', 'Registered Voters:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::number('registered', null, ['class' => 'form-control']) !!}
  </div>
</div>

 
<div class="form-group row">
  {!! Form::label('', '', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
  
