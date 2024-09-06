<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Alumnos</title>
</head>
<body>
    <h1>Bienvenido al portal Alumnos! </h1>
    <p>¿Desea crear un alumno nuevo? <a href="alumno/create"> Aqui</a></p> 
    
    <p>Lista de Alumnos</p>
    <ul>
        
    @foreach ($verAlumnos as $alumno)
        <li>
            <a href="/alumno/{{$alumno->id}}">
                {{$alumno->nombre }}
            </a>
        </li>
    @endforeach
    </ul>
</body>
</html>
