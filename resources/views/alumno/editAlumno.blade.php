<x-html-layout>
    <x-slot name="title">Editar Alumno</x-slot>

    <a href="/alumno"> <button class="text-white bg-sky-900 hover:bg-teal-600 font-medium rounded-lg text-sm p-2">Volver
            atras</button> </a>
    <div class="flex flex-col items-center text-xl font-medium ">
        <div class="bg-sky-900 flex flex-col items-center w-2/4 rounded-xl p-3">

            <h2 class="py-3 text-white">EDITAR LOS DATOS DEL ALUMNO✍</h2>

            <form class="max-w-sm mx-auto " method="POST" action="/editAlumno/{{ $alumno->id }}">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                        del Alumno</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $alumno->nombre }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                        placeholder="Nombre" required />
                </div>
                <div class="mb-5">
                    <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido
                        del Alumno</label>
                    <input type="text" name="apellido" id="apellido" value="{{ $alumno->apellido }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Apellido" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email del
                        Alumno</label>
                    <input type="email" name="email" id="email" value="{{ $alumno->email }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="correo@correo.com" required />
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
            </form>
        </div>
    </div>

</x-html-layout>
