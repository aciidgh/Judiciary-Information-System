@extends('layouts.default')
@section('content')

@if (!Auth::check())
<div class="alert alert-danger" role="alert">Login bro</div>
@else
i am the home page
@endif


@stop