<!DOCTYPE html>
<html>
<head>

<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>*/

	<title>Customer</title>
</head>
<body>


<table id="customers">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Country</th>
		<th>Rating</th>
	</tr>

	@forelse($customers as $customer)
		<tr>
			<td>{{ $customer->name }}</td>
			<td>{{ $customer->email }}</td>
			<td>{{ $customer->phone }}</td>
			<td>{{ $customer->address }}</td>
			<td>{{ $customer->country }}</td>
			<td>{{ $customer->rating }}</td>
		</tr>

	@empty
		<tr>
			<td colspan="6">No records found</td>
		</tr>
	@endforelse
</table>
</body>
</html>