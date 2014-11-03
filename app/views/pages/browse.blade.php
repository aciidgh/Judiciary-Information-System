@extends('layouts.default')
@section('content')
<div class="alert alert-info" role="alert">Balance: 100$</div>


<div class="list-group">
  @foreach($cases as $case)
  <a href="case/{{ $case->id }}" class="list-group-item">

    @if ($case->judgement)
    <div class="panel panel-success">  
      @else
      <div class="panel panel-info">
        @endif
        <div class="panel-heading">
          <h3 class="panel-title">Case : {{ $case->casename }}</h3>
        </div>
        <div class="panel-body">
          @if ($case->judgement)
          <span class="label label-success">Closed</span>
          @else
          <span class="label label-success">Open</span>
          @endif 
          sup bro
        </div>
      </div>
    </a>
    @endforeach
  </div>

  @stop