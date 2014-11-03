@extends('layouts.default')
@section('content')

@if(Auth::user()->type == 'lawyer')
<div class="alert alert-info" role="alert">Balance: $<?php


echo Auth::user()->balance;
if(Auth::user()->balance == 0)
  echo '<br><b>Please add more balance</b>';
?></div>
@endif

<div class="list-group">
  @foreach($cases as $case)
  <a href="case/{{ $case->id }}" class="list-group-item">

    @if ($case->status == 'closed')
      <div class="panel panel-success">  
    @else
      <div class="panel panel-info">
    @endif
        <div class="panel-heading">
          <h3 class="panel-title">Case : {{ $case->casename }}</h3>
        </div>
        <div class="panel-body">
          @if ($case->status == 'closed')
            <span class="label label-success">Closed</span>
          @else
            <span class="label label-info">Open</span>
          @endif 
          sup bro
        </div>
      </div>
    </a>
    @endforeach
  </div>

  @stop