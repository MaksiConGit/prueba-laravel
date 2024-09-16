@props(['title'])

<x-app-layout title="Edit category">

    <script src="https://cdn.tailwindcss.com"></script>

    @if ($errors->any())
        <h2>Erroncio pa</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>    
            @endforeach
        </ul>
    @endif

    <x-create-category>
        <x-slot name="form_action">{{route('categories.update', $category)}}</x-slot>
        <x-slot name="method">@method('PUT')</x-slot>
        <x-slot name="title">edit category</x-slot>
        <x-slot name="slot1">name</x-slot>
        <x-slot name="slot2">fecha rara</x-slot>
        <x-slot name="slot3">beneficios</x-slot>
        <x-slot name="slot4">slug</x-slot>
        <x-slot name="value1">{{old('name', $category->name)}}</x-slot>
        <x-slot name="value2">{{old('fecha_rara', $category->fecha_rara)}}</x-slot>
        <x-slot name="value3">{{old('beneficios', $category->beneficios)}}</x-slot>
        <x-slot name="value4">{{old('slug', $category->slug)}}</x-slot>
        <x-slot name="button">edit</x-slot>
    </x-create-category>

</x-app-layout>