<fieldset style="width: 300px; margin:auto;">
	<legend>Form</legend>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	<form method="post" action="{{ url('controller/validation-post') }}">
		<!-- muốn bắt được dữ liệu từ form submit trong laravel thì phải có tag sau -->
		@csrf
		<!-- 
			có thể sử dụng tag trên hoặc tag sau
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		 -->
		<table cellpadding="5">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="post"></td>
			</tr>
		</table>
	</form>
</fieldset>
