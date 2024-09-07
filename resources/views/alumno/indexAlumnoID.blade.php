<x-html-layout>
    <x-slot name="title">Usuario {{$alumno->id}}</x-slot> 

        <a href="/alumno">Volver atras</a>
        <h1>Hola usuario {{$alumno->nombre}} {{$alumno->apellido}}!</h1>
        <p>Estado: {{$alumno->descripcion}}</p>
        <p>Su correo para recibir notificaciones es: {{$alumno->email}}</p>
        <p>Recuerde su contraseña ("{{$alumno->password}}")</p>
    
        <a href="/alumno/{{$alumno->id}}/edit">Editar Alumno</a>
        <form action="/alumno/{{$alumno->id}}" method="POST"> @csrf @method('DELETE')
            <button type="submit">Eliminar Alumnos</button>
        </form>

</x-html-layout>

