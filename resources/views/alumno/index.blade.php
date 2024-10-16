<x-html-layout>
    <x-slot name="title">Lista de Alumnos</x-slot> 

        <h1 class="text-4xl font-bold text-sky-900 p-5">
            Bienvenido al portal Alumnos! 
        </h1>

        <p class="font-bold text-sky-900 ps-5 pb-5">
            ¿Desea crear un alumno nuevo? 
            <a href="{{route('alumno.create')}}" class="text-white bg-sky-900 hover:bg-teal-600 font-medium rounded-lg text-sm px-5 py-2.5">
                Aquí 
            </a>
        </p>

        <a href="{{route('archive')}}"  class="text-white bg-yellow-600 hover:bg-yellow-900 font-medium rounded-lg text-sm px-5 py-2.5">Alumnos eliminados</a>

        <div class="px-5 mt-5">

            <p class=" bg-sky-900 text-white font-medium px-10">
                Lista de Alumnos
            </p>
            
            <ul class=" bg-slate-300 text-black font-medium">
                @foreach ($alumnos as $alumno)
                    <li class=" py-1 px-10 border-solid border-2 border-sky-900">
                        <a href="{{route('alumno.show', [$alumno])}}">
                            {{$alumno->id}}) 
                            {{ $alumno->nombre }} 
                            {{$alumno->apellido}}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{ $alumnos->links() }}

        </div>

</x-html-layout>

