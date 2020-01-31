<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
@section('navbar')
This is the navbar part!
@show

@yield('content')


@section('footer')
<p>This is the footer.</p>
@show


</body>
</html>