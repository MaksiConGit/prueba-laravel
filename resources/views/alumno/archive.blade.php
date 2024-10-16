<x-html-layout>
    <x-slot name="title">Lista de Alumnos eliminados</x-slot> 

    <a href="{{route('alumno.index')}}">
        <button class="text-white bg-sky-900 hover:bg-teal-600 font-medium rounded-lg text-sm p-2 my-1">
            Volver atrás
        </button> 
    </a>
        <div class="px-5 ">

            <p class=" bg-sky-900 text-white font-medium px-10">
                Lista de Alumnos eliminados
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

