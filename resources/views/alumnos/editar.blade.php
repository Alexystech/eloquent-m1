<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=email], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=number], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <a href="/alumnos">Ver listado de alumnos</a>
    <br>
    <h2>Editar alumno</h2>
    <div>
        <form action="/alumnos/editar/{{ $alumno->id }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <label for="">Nombre: </label>
            <input type="text" name="nombre" placeholder="su nombre" value="{{$alumno->nombre}}">
            <label for="">correo: </label>
            <input type="email" name="correo" placeholder="example@gmail.com" value="{{$alumno->correo}}">
            <label for="">Apellido Paterno: </label>
            <input type="text" name="apellido_paterno" placeholder="Su apellido paterno" value="{{$alumno->apellido_paterno}}">
            <label for="">Apellido Materno: </label>
            <input type="text" name="apellido_materno" placeholder="Su apellido materno" value="{{$alumno->apellido_materno}}">
            <label for="">Direccion: </label>
            <input type="text" name="direccion" placeholder="Su direccion" value="{{$alumno->direccion}}">
            <label for="">Edad: </label>
            <input type="number" name="edad" value="{{$alumno->edad}}">

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>