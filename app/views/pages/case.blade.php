@extends('layouts.default')
@section('content')

<div class="container">


<dl class="dl-horizontal well">
  <dt>Case Name</dt>
  <dd>{{ $caseModel->casename }}</dd>

  <dt>Defendant</dt>
  <dd>{{ $caseModel->defendant }}</dd>

  <dt>Crime Type</dt>
  <dd>{{ $caseModel->crimetype }}</dd>

<dt>Location</dt>
  <dd>{{ $caseModel->location }}</dd>

  <dt>Arresting officer</dt>
  <dd>{{ $caseModel->officer }}</dd>

  <dt>Start Date</dt>
  <dd>{{ $caseModel->startdate }}</dd>


<dt>Status</dt>
  <dd><span class="label label-success">Closed</span></dd>
</dl>

<div class="panel panel-default">
  <div class="panel-heading">Hearings</div>
  <table class="table">
   <col width="10%">
  <col width="90%">
    <tr>
      <th width="30">Date</th>
      <th>Summary</th>
    </tr>
    @foreach($caseModel->hearings as $hearing)
    <tr>
      <td width="20">{{$hearing->hearingdate}}</td>
      <td >{{$hearing->summary}}</td>
    </tr>
    @endforeach

    <tr>
      {{ Form::open() }}
      <td width="20">{{ Form::text('date', null ,array('placeholder' => 'date','class' => 'form-control')) }}</td>
      <td >{{ Form::text('summary', null ,array('placeholder' => 'summary','class' => 'form-control')) }}</td>
    </tr>
  </table>
  
</div>
<input type="submit" name="add" value="Add Hearing" class = 'btn btn-lg btn-default'>
<input type="submit" name="close" value="Close Case" class = 'btn btn-lg btn-primary'>

{{ Form::close() }}

</div> <!--container.div-->
@stop