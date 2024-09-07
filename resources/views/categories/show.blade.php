<x-app-layout title="Show Category {{$category->id}}">
    <div>
        <ul>
            <li>Nombre: {{$category->name}}</li>
            <li>Beneficios: {{$category->beneficios}}</li>
            <li>Fecha rara: {{$category->fecha_rara}}</li>
        </ul>
    </div>
    <a href="/categories/{{$category->id}}/edit">Edit category</a><br>

    <form method="POST" action="/categories/{{$category->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete category</button>
    </form>

    <a href="/categories">Go back to Categories</a>
</x-app-layout>