<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

@forelse ($peliculas as $pelicula)
	<div >
		{{ $pelicula }}
	</div>
@empty
	<div>No hay peliculas</div> 
@endforelse


</body>
</html>