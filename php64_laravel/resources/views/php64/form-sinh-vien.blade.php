<fieldset style="width:300px; margin:auto;">
	<legend>Form</legend>
	<form method="post" action="{{ url('create-post') }}">
		@csrf
		<table cellpadding="5">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</fieldset>