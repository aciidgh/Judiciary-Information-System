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
  </table>
</div>


</div> <!--container.div-->
@stop