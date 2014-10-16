@extends('layouts.default')
@section('content')
<div style=" padding-top: 50px;text-align:center;">
	<h1>Please enter your username and password to use the system.</h1>
</div>
<div class="LoginContent">

	<input type="text" class="form-control" placeholder="Username" required autofocus>
	<br />
	<input type="password" class="form-control" placeholder="Password" require>
	<br />
	<input type="button" class="btn btn-lg btn-primary btn-block" value="Login"/>
</div>
@stop