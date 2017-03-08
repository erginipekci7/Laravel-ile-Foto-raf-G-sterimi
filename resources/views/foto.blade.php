<!DOCTYPE html>
<html>
<head>
	<title>Görseller</title>
</head>
<body>
@foreach($resimler as $resim)
<img src="images/{{$resim}}" height=" 200px" width="200px">
<!-- Dizide bulunan fotografları teker teker alarak ekranda gosterir. -->
@endforeach

</body>
</html>