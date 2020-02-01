<!DOCTYPE html>
<html>
@extends('layout.header')
<head>
	<title>{{ $article->title }}</title>
</head>
<body>
	<a href="/blog">Back to Blog List</a>
	<h1>{{ $article->title }}</h1>
	<p>{{ $article->content }}</p>
</body>
</html>