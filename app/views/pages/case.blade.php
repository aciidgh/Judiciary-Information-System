@extends('layouts.default')
@section('content')

<div class="container">


<dl class="dl-horizontal well">
  <dt>Case Name</dt>
  <dd>{{ $caseModel->casename }}</dd>

  <dt>Defendant</dt>
  <dd>{{ $caseModel->defendant }}</dd>

  <dt>Defendant Address</dt>
  <dd>{{ $caseModel->defaddress }}</dd>

  <dt>Status</dt>
  <dd>
    @if ($caseModel->status == 'closed')
      <span class="label label-success">Closed</span>
    @else
      <span class="label label-info">Open</span>
    @endif 
  </dd>

  <dt>Crime Type</dt>
  <dd>{{ $caseModel->crimetype }}</dd>

  <dt>Crime Date</dt>
  <dd>{{ $caseModel->date }}</dd>

  <dt>Location</dt>
  <dd>{{ $caseModel->location }}</dd>

  <dt>Arresting officer</dt>
  <dd>{{ $caseModel->officer }}</dd>

  <dt>Arrest Date</dt>
  <dd>{{ $caseModel->arrestdate }}</dd>

  <dt>Judge</dt>
  <dd>{{ $caseModel->judge }}</dd>

  <dt>Judgement</dt>
  <dd>{{ $caseModel->judgement }}</dd>

  <dt>Close Date</dt>
  <dd>{{ $caseModel->dateclosed }}</dd>

  <dt>Prosecutor</dt>
  <dd>{{ $caseModel->prosecutor }}</dd>

  <dt>Start Date</dt>
  <dd>{{ $caseModel->startdate }}</dd>

  <dt>Expected Complete</dt>
  <dd>{{ $caseModel->expectedcomplete }}</dd>

  <dt>Start Date</dt>
  <dd>{{ $caseModel->startdate }}</dd>
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
    @if(Auth::user()->type == 'registar')
    <tr>
      {{ Form::open() }}
      <td width="20">{{ Form::text('date', null ,array('placeholder' => 'date','class' => 'form-control')) }}</td>
      <td >{{ Form::text('summary', null ,array('placeholder' => 'summary','class' => 'form-control')) }}</td>
    </tr>
    @endif
  </table>
  
</div>
@if(Auth::user()->type == 'registar')
<input type="submit" name="add" value="Add Hearing" class = 'btn btn-lg btn-default'>
<input type="submit" name="close" value="Close Case" class = 'btn btn-lg btn-primary'>

{{ Form::close() }}
@endif
</div> <!--container.div-->
@stop