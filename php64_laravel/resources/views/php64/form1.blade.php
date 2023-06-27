<fieldset style="width: 300px; margin:auto;">
	<legend>Form</legend>
	<form method="post" action="{{ url('controller/form1-post') }}">
		<!-- muốn bắt được dữ liệu từ form submit trong laravel thì phải có tag sau -->
		@csrf
		<!-- 
			có thể sử dụng tag trên hoặc tag sau
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		 -->
		<table cellpadding="5">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="post"></td>
			</tr>
		</table>
	</form>
</fieldset>
