<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pelicula->Nombre }}</title>
</head>
<body>
    <h1>{{ $pelicula->Nombre }}</h1>
    <p><strong>Clasificación:</strong> {{ $pelicula->Clasificacion }}</p>
    <p><strong>Fecha:</strong> {{ $pelicula->Fecha }}</p>
    <p><strong>Revisión:</strong> {{ $pelicula->Revision }}</p>
    <p><strong>Temporada:</strong> {{ $pelicula->Temporada }}</p>
    
    <a href="{{ url('/personajes') }}">Back to Personajes</a>
</body>
</html>