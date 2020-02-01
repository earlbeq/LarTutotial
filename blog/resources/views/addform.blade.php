<!DOCTYPE html>
<html>
@extends('layout.header')
<head>
	<title></title>
</head>
<body>
<form action="/blog" method="POST" class="form">
	@csrf 
	<input type="text" name="title" placeholder="title"><br>
	<textarea name="content"></textarea><br>
	<input type="submit" name="submit" value="Submmit">
</form>
</body>
</html>