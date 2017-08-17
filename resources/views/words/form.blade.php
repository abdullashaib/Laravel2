 
<div class="form-group row">
  {!! Form::label('name', 'Word Name:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
</div>
  
<div class="form-group row">
  {!! Form::label('constituency_id', 'Constituent:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('constituency_id', $constituents, null, ['placeholder' => 'Select constituent...', 'class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('district_id', 'District:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('district_id', $districts, null, ['placeholder' => 'Select district...', 'class' => 'form-control']) !!}
  </div>
</div>

 
<div class="form-group row">
  {!! Form::label('', '', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
  
