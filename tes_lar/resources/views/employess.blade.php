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
{{-- @unless ($age >= 18)
	You can't vote.
@endunless --}}

{{-- IsSet : to check if variable are set or have value --}}
{{-- @isset($employees)
	Employee is set!
@endisset --}}

{{-- Empty : to check if variable/array is empty --}}
{{-- @empty($employees)
	Employee is Empty!
@endempty --}}

{{-- The Loop Variable --}}
@foreach($employees as $employees)
	@if($loop->first)
		This is the first iteration
	@endif

	@if($loop->last)
		This is the last iteration.
	@endif

	<p>This is {{ $employees['name'] }} - {{ $loop->remaining }}</p>
@endforeach


{{-- for $loop->parent sample : for nested array --}}

@foreach($employees as $employee)

	@foreach($employees as $employee)
		@if($loop->parent->last)
			{{ $loop->parent->index }}<br>
		@endif

		
	@endforeach

@endforeach

{{-- 

$loop->index 			The index of the current loop iteration(starts at 0)
$loop->iteration 		The current loop iteration(starts at 1)
$loop->remaining		The iteration remaining in the loop
$loop->count			The total number of items in the array being alterated
$loop->first			Whether this is the first iteration through the loop
$loop->last				Whether this is the last iteration through the loop
$loop->depth			The nesting level of the current loop
$loop->parent			When in a nested loop, the parent's loop variable


 --}}

</body>
</html>