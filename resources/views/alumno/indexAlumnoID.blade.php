<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario {{$alumno->id}}</title>
</head>
<body>
    <a href="/alumno">Volver atras</a>
    <h1>Hola usuario {{$alumno->nombre}} {{$alumno->apellido}}!</h1>
    <p>Estado: {{$alumno->descripcion}}</p>
    <p>Su correo para recibir notificaciones es: {{$alumno->email}}</p>
    <p>Recuerde su contraseña ("{{$alumno->password}}")</p>
</body>
</html>