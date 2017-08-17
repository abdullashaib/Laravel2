 
<div class="form-group row">
  {!! Form::label('constituency', 'Constituency:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('constituency', null, ['class' => 'form-control']) !!}
  </div>
</div>
  
<div class="form-group row">
  {!! Form::label('district_id', 'District:', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('district_id', $districts, null, ['class' => 'form-control']) !!}
  </div>
</div>
 
<div class="form-group row">
  {!! Form::label('', '', ['class' => 'col-sm-2 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
  
