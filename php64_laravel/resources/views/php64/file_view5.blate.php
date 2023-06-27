<!-- .  trong larabel muoon submit duocj form thi phai dat tag @csrf(bat buoc)-->
<fieldset style="width:300px;margin: auto;">
	<legend>form</legend>
	<form method="post" action="{{url('view5-form-post')}}">
		@csrf
		<input type="text" name="txt" required> <input type="submit" value ="submit">
	</form>
	<!-- co the dung dung du lieu request dder lay du lieu taij view -->
	{{Request::get("txt") !=""?Request::get("txt"):""}}
</fieldset>