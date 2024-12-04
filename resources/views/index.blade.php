<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
</head>
<body>
    <h1>Personajes</h1>

    <ul>
        @foreach($personajes as $personaje)
            <li>
                <strong>{{ $personaje->Nombre }}</strong> (Pelicula: 
                <a href="{{ route('pelicula.show', $personaje->pelicula->id) }}">
                    {{ $personaje->pelicula->Nombre }}
                </a>)
            </li>
        @endforeach
    </ul>
</body>
</html>