<h1><?php echo $hoten; ?></h1>
<h1><?php echo $email; ?></h1>
<!-- lệnh blade engine tương đương với lệnh echo của php -->
<!-- hiểm thị html sau khi đã mã hóa -->
{{ "<h1>Hiển thị mã hóa ký hiệu html</h1>" }}
<h1>{{ $hoten; }}</h1>
<h1>{{ $email; }}</h1>

<!-- hiển thị nguyên mẫu ký tự html -->
{!! "<h1>Hiển thị nguyên mẫu ký hiệu html</h1>" !!}
<h1>{!! $hoten; !!}</h1>
<h1>{!! $email; !!}</h1>

