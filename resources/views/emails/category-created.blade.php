{{-- <x-app-layout title="Send Email">
    <h1>Correo por aprobar</h1>
    <p>Se ha creado una nueva categoría que necesita ser aprobada</p>
    <p>Nombre: {{$category->name}}</p>
    <a href="{{route('categories.show', $category)}}">Click para aprobar</a>
</x-app-layout> --}}

<x-mail::message>
# Correo por aprobar
<x-mail::panel>
Se ha creado una nueva categoría que necesita ser aprobada
</x-mail::panel>

<x-mail::button :url="route('categories.show', $category)" color='success'>
Click para aprobar
</x-mail::button>
</x-mail::message>