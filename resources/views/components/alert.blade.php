@props(['type'])

<div>
    <h1>
        @if ($type == 'facultad')
            @if ($alumno == "Maximiliano" && $carrera == "Sistemas") 
                {{"Alumno: $alumno"}}<br>{{"Carrera: $carrera"}}    
            @endif
        @else
            No es de una facultad
        @endif
    </h1>
</div>