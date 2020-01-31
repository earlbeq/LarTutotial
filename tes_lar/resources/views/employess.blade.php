<!DOCTYPE html>
<html>
<head>
	<title>Control Structure</title>
</head>
<body>

{{-- Control Structure --}}
{{-- IFElse Statement --}}
{{-- @if ($grade == 75)
	<p>Close Enough!</p>
@elseif ($grade > 75)
	<p>You Passed kiddo!</p>
@else
	<p>You Failed!</p>
@endif --}}


{{-- Switch case --}}
{{-- @switch($grade)
	@case(80)
		Your grade is 80
		@break
	@case(90)
		Your grade is 90
		@break
	@default
		I do not know your grade!		
@endswitch --}}

{{-- For Loop --}}
{{-- @for ($i = 0; $i < 10; $i++)
	The current value is {{ $i }}<br>
@endfor --}}

{{-- Foreach --}}
{{-- @foreach ($employees as $employees)
	{{ $employees['name'] }} <br>
@endforeach --}}

{{-- Forelse : to check empty array --}}
{{-- @forelse ($employees as $emp)
	<li>{{ $emp['name'] }}</li>
@empty
	<p>No employees</p>
@endforelse --}}


{{-- while loop --}}
{{-- @while ($grade < 75)
	@php
		$grade++
	@endphp

	{{ $grade }} <br>
@endwhile --}}

{{-- Unless : binabaliktad ang condition --}}
@unless ($age >= 18)
	You can't vote.
@endunless



</body>
</html>