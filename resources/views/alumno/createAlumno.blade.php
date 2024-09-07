<x-html-layout>
    <x-slot name="title">Crear Alumno</x-slot> 
    
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

</x-html-layout>



