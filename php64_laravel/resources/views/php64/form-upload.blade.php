<fieldset style="width:350px; margin:auto;">
	<legend>Form upload</legend>
	<!-- 
		- Muốn upload file thì phải có thuộc tính sau vào thẻ form: enctype="multipart/form-data"
		- Muốn lấy dữ liệu theo kiểu post trong laravel thì phải có tag @csrf hoặc <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 -->
	<form method="post" enctype="multipart/form-data" action="{{ url('upload-post') }}">
		@csrf
		<table cellpadding="5">
			<tr>
				<td>Name</td>
				<td><input type="txt" name="name" required></td>
			</tr>
			<tr>
				<td>File</td>
				<td><input type="file" name="photo"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="upload"></td>
			</tr>
		</table>
	</form>
</fieldset>