<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>tianjia</title>
	</head>
	<body>
		@include('flash::message')
		<br/>
		{{Active::getController() }}
		{{app('active')->getController()}}
==============================
		<br />
		<form class="" action="{{url('/menu')}}" method="post">
			{!! csrf_field() !!}
			<input type="text" name="title" value="000000000000000000">
			<textarea name="content" rows="8" cols="80">11111111111111111111111</textarea>
			<input type="submit" name="" value="tijiao">
		</form>
	</body>
</html>
