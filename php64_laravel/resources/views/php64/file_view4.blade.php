<!-- import file layout.blade.php vào đây -->
@extends("php64.layout")
<!-- đưa nội dung bên dưới vào tag "do-du-lieu-vao-layout", tag này định nghĩa tại file layout.blade.php -->
@section("do-du-lieu-vao-layout")
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
@endsection
<!-- đổ dữ liệu vào tag test1 -->
@section("test1")
	<h1>Hello world</h1>
@endsection