<!-- trong laravel, muốn submit được form thì phải đặt tag @csrf (bắt buộc) -->
<fieldset style="width:300px; margin:auto;">
	<legend>Form</legend>
	<form method="post" action="{{ url('view5-form-post') }}">
		@csrf
		<input type="text" name="txt" required> <input type="submit" value="submit">
	</form>
	<!-- có thể sử dụng đối tượng Request để lấy dữ liệu tại view -->
	<h1>{{ Request::get("txt") != "" ? Request::get("txt") : "" }}</h1>
</fieldset>