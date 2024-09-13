<x-app-layout title="Show Category {{$category->id}}">
    <div>
        <ul>
            <li>Nombre: {{$category->name}}</li>
            <li>Beneficios: {{$category->beneficios}}</li>
            <li>Fecha rara: {{$category->fecha_rara}}</li>
            <li>Slug: {{$category->slug}}</li>
        </ul>
    </div>
    <a href="{{route('categories.edit', $category)}}">Edit category</a><br>

    <form method="POST" action="{{route('categories.destroy', $category)}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete category</button>
    </form>

    <a href="{{route('categories.index')}}">Go back to Categories</a>
</x-app-layout>