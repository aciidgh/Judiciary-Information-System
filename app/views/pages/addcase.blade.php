@extends('layouts.default')
@section('content')
<div class="addCase">
  <div class="panel panel-info">
    <div class="panel-heading">Please Enter case details</div>
    <div class="panel-body">
      <div class="form-group">

        {{ Form::open(array('url' => 'addcase')) }}
       Case Name:
        {{ Form::text('casename', null ,array('class' => 'form-control')) }}
  
        Defendant:
        {{ Form::text('defendant', null ,array('class' => 'form-control')) }}

        Defendant Address:
        {{ Form::text('defaddress', null ,array('class' => 'form-control')) }}

        Crime Type:
        {{ Form::text('crimetype', null ,array('class' => 'form-control')) }}

        Date:
        {{ Form::text('date', null ,array('placeholder' => 'dd/mm/yy','class' => 'form-control')) }}

        Location:
        {{ Form::text('location', null ,array('class' => 'form-control')) }}

        Arresting officer:
        {{ Form::text('officer', null ,array('class' => 'form-control')) }}

        Arresting Date:
        {{ Form::text('arrestdate', null ,array('placeholder' => 'dd/mm/yy','class' => 'form-control')) }}

        Judge:
        {{ Form::text('judge', null ,array('class' => 'form-control')) }}

        Judgement:
        {{ Form::text('judgement', null ,array('class' => 'form-control')) }}

        Date closed:
        {{ Form::text('dateclosed', null ,array('placeholder' => 'dd/mm/yy','class' => 'form-control')) }}

        Public prosecutor:
        {{ Form::text('prosecutor', null ,array('class' => 'form-control')) }}

        Start Date:
        {{ Form::text('startdate', null ,array('placeholder' => 'dd/mm/yy','class' => 'form-control')) }}
        Expected complete date:
        {{ Form::text('expectedcomplete', null ,array('placeholder' => 'dd/mm/yy','class' => 'form-control')) }}
        <br />
        {{ Form::submit('Submit!',array('class' => 'btn btn-lg btn-primary btn-block')) }}

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@stop