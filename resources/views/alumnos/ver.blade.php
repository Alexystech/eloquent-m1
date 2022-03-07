<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <a href="/alumnos">Ver listado de alumnos</a>
    <br>
    <h2>Ver alumno</h2>
    <div>
        <p>Nombre: {{ $alumno->nombre }}</p>
        <p>Apellidos: {{ $alumno->apellido_paterno }} {{ $alumno->apellido_materno }}</p>
        <p>Edad: {{ $alumno->edad }}</p>
        <p>Direccion: {{ $alumno->direccion }}</p>
    </div>
</body>
</html>