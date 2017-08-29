<!DOCTYPE html>
<html>
<head>
	<title>13th form</title>
</head>
<body>
	{!! Form::open(['url' => 'revision', 'method' =>'post']) !!} 
	{!! Form::text('number1', '',['placeholder' => 'xyz']) !!}
	{!! Form::text('number2', '',['placeholder' => 'xyz']) !!}
	{!! Form::submit('Click Here')	!!}
	{!! csrf_field() !!}  
	{!! Form::close() !!}
</body>
</html>


