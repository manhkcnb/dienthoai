<!-- có thể viết cú pháp php vào trong file này -->
<?php 
	echo "<h1>Hello world</h1>";
 ?>
 <!-- có thể định nghĩa code php thông qua blade engine tag -->
 @php
 	$ten_lop = "php64";
 	echo "<h1>$ten_lop</h1>";
 @endphp
 <!-- khối lệnh if -->
 @php
 	$number = 3;
 @endphp

 @if($number % 3 == 0)
 	{{ "$number là số chẵn" }}
 @else
 	{{ "$number là số lẻ" }}
 @endif

 <!-- khối lệnh for -->
 @for($i = 1; $i <= 5; $i++)
 	{!! "<h1>$i</h1>" !!}
 @endfor

 <!-- khối lệnh foreach -->
 @php
 	$sinh_vien = array("hoten"=>"Nguyễn Văn A","email"=>"nva@gmail.com","diachi"=>"Hà nội");
 @endphp

 @foreach($sinh_vien as $value)
 	<h1>{{ $value }}</h1>
 @endforeach