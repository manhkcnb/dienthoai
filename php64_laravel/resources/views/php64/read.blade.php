<fieldset style="width:500px; margin:auto;">
	<legend>List</legend>
	<div style="margin-bottom: 5px;"><a href="{{ url('create') }}">Create</a></div>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
		<tr style="font-weight: bold;">
			<td>Name</td>
			<td>Email</td>
			<td style="width:100px;"></td>
		</tr>	
		<!-- kiểm tra xem biến session có tồn tại không -->
		@if(session()->has('sinh_vien'))
			@foreach($sinh_vien as $key => $sv)
				<tr>
					<td>{{ $sv['name'] }}</td>
					<td>{{ $sv['email'] }}</td>
					<td style="text-align: center;">
						<a href="{{ url('delete/'.$key) }}">Delete</a>
					</td>
				</tr>
			@endforeach
		@endif
	</table>
</fieldset>
<style type="text/css">
	body{font-family: Arial;}
	a{text-decoration: none;}
</style>