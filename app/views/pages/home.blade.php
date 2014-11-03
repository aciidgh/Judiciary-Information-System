@extends('layouts.default')
@section('content')

@if (!Auth::check())
<div class="alert alert-danger" role="alert">Login bro</div>
@else

@if(Auth::user()->type == 'registar')
<a href="../addcase">Add Case</a> <br>
<a href="../addaccount">Add Account</a>
@endif

@endif


@stop