<!DOCTYPE html>
<html>
<head>
	<title>fotolar</title>
</head>
<body>
@foreach($diziResim as $resimler)
<img src="images/{{$resimler}}" height=" 200px" width="200px">
<!-- Dizide bulunan fotografları teker teker alarak ekranda gosterir. -->
@endforeach

</body>
</html>