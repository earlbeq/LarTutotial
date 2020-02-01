<!DOCTYPE html>
<html>
@extends('layout.header')
<head>
	<title>Blogs</title>
</head>
<body>

<table class="table">
	<thead>
	<tr>
		<th scope="col">Id</th>
		<th scope="col">Title</th>
		<th scope="col">Content</th>
		<th scope="col">Action</th>
	</tr>
	</thead>

	<h1>Articles</h1>
	<a href="/blog/create">Add New Article</a>
	<tbody>
		@foreach($articles as $article)
			<tr>
				<td scope="col">{{ $article->id }}</td>
				<td scope="col">{{ $article->title }}</td>
				<td scope="col">{{ $article->content }}</td>
				<td><a href="/blog/{{ $article->id }}">View</a> | 
					<a href="/blog/{{ $article->id }}/edit">Edit</a> |
				
					<form action="/blog/{{ $article->id }}" method="POST">
						@csrf
						@method("DELETE")

						<input type="submit" name="submi" value="Delete">
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

{{ $articles->links() }}

</body>
</html>