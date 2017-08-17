 
<div class="form-group row">
  {!! Form::label('firstname', 'First Name:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('middlename', 'Middle Name:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('middlename', null, ['class' => 'form-control']) !!}
  </div>      
</div>

<div class="form-group row">
  {!! Form::label('lastname', 'Last Name:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('datebirth', 'Date of Birth:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('datebirth', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('gender', 'Gender:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('gender', ['Female' => 'Female', 'Male' => 'Male'], null, ['placeholder' => 'Select gender...', 'class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('residentialaddress', 'Address:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('residentialaddress', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('pollingstation_id', 'Polling Station:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('pollingstation_id', $pollings, null, ['placeholder' => 'Select polling station...', 'class' => 'form-control']) !!}
  </div>
</div>
  
<div class="form-group row">
  {!! Form::label('residentialconstituency_id', 'Residential Constituent:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('residentialconstituency_id', $constituents, null, ['placeholder' => 'Select constituent...', 'class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('votingconstituency_id', 'Voting Constituent:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('votingconstituency_id', $constituents, null, ['placeholder' => 'Select constituent...', 'class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('voterIDnumber', 'Voter ID:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::number('voterIDnumber', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  {!! Form::label('lifestatus', 'Life Status:', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::select('lifestatus', ['Dead' => 'Dead', 'Is Live' => 'Is Live'], null, ['placeholder' => 'Select life status...','class' => 'form-control']) !!}
  </div>
</div>
                                                                               
<div class="form-group row">
  {!! Form::label('', '', ['class' => 'col-sm-3 col-form-label']) !!}
  <div class="col-sm-8">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
  </div>
</div>
  
