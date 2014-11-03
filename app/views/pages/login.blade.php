@extends('layouts.default')
@section('content')
<div style=" padding-top: 50px;text-align:center;">
	<h1>Please enter your username and password to use the system.</h1>
</div>
<div class="LoginContent">
	{{ Form::open(array('url' => 'login')) }}

	<!-- if there are login errors, show them here -->
	<p>
		{{ $errors->first('fullname') }}
		{{ $errors->first('password') }}
	</p>

	<p>
	{{ Form::text('fullname', Input::old('text'), array('placeholder' => 'Username','class' => 'form-control')) }}
	</p>

	<p>
		{{ Form::password('password',array('placeholder' => 'Password','class' => 'form-control')) }}
	</p>

	<p>{{ Form::submit('Submit!',array('class' => 'btn btn-lg btn-primary btn-block')) }}</p>

	{{ Form::close() }}

	<div class="alert alert-info" role="alert">
	<b>Registar</b>  regis:regis <br>
	<b>Judge</b>  judge:judge<br>
	<b>Lawyer</b> lawyer:lawyer<br>
	</div>
</div>
@stop