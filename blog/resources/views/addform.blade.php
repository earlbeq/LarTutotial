<!DOCTYPE html>
<html>
@extends('layout.header')
<head>
	<title></title>
</head>
<body>
<form action="/blog" method="POST" class="form">
	@csrf 
	<input type="text" name="title" placeholder="title" value="{{ old('title') }}"><br>
	<textarea name="content">{{ old('content') }}</textarea><br>
	<input type="submit" name="submit" value="Submmit">
</form>

	@if($errors->any())
	<div>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
</body>
</html>