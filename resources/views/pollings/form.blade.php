 
<div class="form-group row">
  {!! Form::label('name', 'Polling Station Name:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('number', 'Polling Station Number:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('shehia_id', 'Shehia Name:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('shehia_id', $shehias, null, ['class' => 'form-control']) !!}
  </div>
</div>
  
<div class="form-group row">
  {!! Form::label('constituency_id', 'Constituent:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('constituency_id', $constituents, null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('', '', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
  
