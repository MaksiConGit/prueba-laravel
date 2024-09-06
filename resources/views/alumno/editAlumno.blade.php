<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar alumno</title>
</head>
<body>
    <a href="/alumno">Volver atras</a>

    <h2>EDITAR LOS DATOS DEL ALUMNO✍</h2>
    <div>
        <form action="/editAlumno/{{$alumno->id}}" method="POST">

            @csrf

            @method('PUT')

            <label> 
                Nombre:
                <input type="text" name="nombre" value="{{$alumno->nombre}}" required>
            </label>
            <br>
            <br>
            <label> 
                Apellido:
                <input type="text" name="apellido" value="{{$alumno->apellido}}" required>
            </label>
            <br>
            <br>
            <label> 
                Email:
                <input type="email" name="email" value="{{$alumno->email}}" required>
            </label>

            <button type="submit" >Editar</button>
        </form>
</body>
</html>