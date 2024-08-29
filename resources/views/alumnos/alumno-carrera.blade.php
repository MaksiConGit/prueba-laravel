<x-app-layout title="Mostrar Alumno">
    <h1>Soy el alumno {{ucfirst($alumno)}} de la carrera {{ucfirst($carrera)}}</h1>
    @if ($alumno == 'maximiliano')
        <p>Sos Maksi pa</p>
    @else
        <p>Sos otra persona pa</p>
    @endif

    @switch($carrera)
        @case('sistemas')
            <p>Qué pro</p>
            @break
        @case('robotica')
            <p>Qué pron't</p>
            @break
        @case('marketing')
            <p>Qué zzz</p>
            @break
    @endswitch

    <x-alert type="facultad">
        Alumno
        <x-slot name="alumno">{{ucfirst($alumno)}}</x-slot>
        <x-slot name="carrera">{{ucfirst($carrera)}}</x-slot>
    </x-alert>
</x-app-layout>
