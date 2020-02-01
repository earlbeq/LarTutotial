<!DOCTYPE html>
<html>
@extends('layout.header')
<head>
	<title></title>
</head>
<body>
<form action="/blog/{{$article->id}}" method="POST" class="form">
	@csrf 
	@method('PUT')
	<input type="text" name="title" placeholder="title" value="{{$article->title}}"><br>
	<textarea name="content">{{$article->content}}</textarea><br>
	<input type="submit" name="submit" value="Submmit">
</form>
</body>
</html>