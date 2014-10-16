@extends('layouts.default')
@section('content')
<div class="addCase">
  <div class="panel panel-info">
    <div class="panel-heading">Please Enter case details</div>
    <div class="panel-body">
      <div class="form-group">

        Case Name:
        <input type="text" class="form-control"  required autofocus>

        Defendant:
        <input type="text" class="form-control"  required>

        Defendant Address:
        <input type="text" class="form-control"  required>

        Crime Type:
        <input type="text" class="form-control"  required>

        Date:
        <input type="text" class="form-control"  required>

        Location:
        <input type="text" class="form-control"  required>

        Arresting officer:
        <input type="text" class="form-control"  required>  

        Arresting Date:
        <input type="text" class="form-control"  required>  

        Judge:
        <input type="text" class="form-control"  required>  

        Judgement:
        <input type="text" class="form-control">  

        Date closed:
        <input type="text" class="form-control"  required>  

        Public prosecutor:
        <input type="text" class="form-control"  required>  

        Start Date:
        <input type="text" class="form-control"  required>  
        Expected complete date:
        <input type="text" class="form-control"  required>  
        <br />
        <input type="button" class="btn btn-lg btn-primary btn-block" value="Submit"/>
      </div>
    </div>
  </div>
</div>
@stop