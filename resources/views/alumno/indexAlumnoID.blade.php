<x-html-layout>
    <x-slot name="title">Usuario {{$alumno->id}}</x-slot> 
    <x-slot name="header">
        <x-slot name="nav">
        </x-slot>
    </x-slot>

        <a href="{{route('alumno.index')}}">
            <button class="text-white bg-sky-900 hover:bg-teal-600 font-medium rounded-lg text-sm p-2 my-1">Volver atras</button> 
        </a>

        <h1 class=" text-4xl font-bold text-sky-900">
            Hola usuario {{$alumno->nombre}} {{$alumno->apellido}}!
        </h1>
        <p>
            Estado: {{$alumno->descripcion}}
        </p>
        <p>
            Su correo para recibir notificaciones es: {{$alumno->email}}
        </p>
        <p class="font-bold">Recuerde su contraseña: <span class=" text-red-600">{{$alumno->password}})</span></p>
        <div class="py-2 flex gap-5">
            <a href="{{route('alumno.edit', $alumno)}}">
                <button class="text-white bg-yellow-600 hover:bg-yellow-800 font-medium rounded-lg text-sm p-2">Editar Alumno✍</button>
            </a>
            <form action="/delete/{{$alumno->id}}" method="POST"> @csrf @method('DELETE')
                <button type="submit"><button class="text-white bg-red-700 hover:bg-red-900 font-medium rounded-lg text-sm p-2">Eliminar Alumno❌</button></button>
            </form>    
        </div>
        
</x-html-layout>

