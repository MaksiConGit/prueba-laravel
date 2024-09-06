<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear alumno</title>
</head>

<body>
    <a href="/alumno">Volver atras</a>

    <h2>INGRESE LOS DATOS DEL ALUMNO✍</h2>
    <div>
        <form action="/creacionAlumno" method="POST">

            @csrf

            <label> 
                Nombre:
                <input type="text" name="nombre" required>
            </label>
            <br>
            <br>
            <label> 
                Apellido:
                <input type="text" name="apellido" required>
            </label>
            <br>
            <br>
            <label> 
                Email:
                <input type="email" name="email" required>
            </label>

            <button type="submit" >Enviar</button>
        </form>
</body>

</html>
