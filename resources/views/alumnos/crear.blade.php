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
        input[type=password], select {
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
    <h2>
        Nuevo alumno
    </h2>
    <form action="/alumnos/crear" method="POST">
        @csrf
        <label for="">ID: </label>
        <input type="text" name="id">
        <label for="">Nombre: </label>
        <input type="text" name="nombre" placeholder="su nombre">
        <label for="">correo: </label>
        <input type="email" name="correo" placeholder="example@gmail.com">
        <label for="">Contraseña: </label>
        <input type="password" name="contraseña">
        <label for="">Apellido Paterno: </label>
        <input type="text" name="apellido_paterno" placeholder="Su apellido paterno">
        <label for="">Apellido Materno: </label>
        <input type="text" name="apellido_materno" placeholder="Su apellido materno">
        <label for="">Direccion: </label>
        <input type="text" name="direccion" placeholder="Su direccion">
        <label for="">Edad: </label>
        <input type="number" name="edad">

        <input type="submit" value="Guardar">
    </form>
</body>
</html>