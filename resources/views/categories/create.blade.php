@props(['title'])

<x-app-layout title="Create category">

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
        <x-slot name="form_action">{{route('categories.index')}}</x-slot>
        <x-slot name="method"></x-slot>
        <x-slot name="title">create category</x-slot>
        <x-slot name="slot1">name</x-slot>
        <x-slot name="slot2">fecha rara</x-slot>
        <x-slot name="slot3">beneficios</x-slot>
        <x-slot name="slot4">slug</x-slot>
        <x-slot name="value1">{{old('name')}}</x-slot>
        <x-slot name="value2">{{old('fecha_rara')}}</x-slot>
        <x-slot name="value3">{{old('beneficios')}}</x-slot>
        <x-slot name="value4">{{old('slug')}}</x-slot>
        <x-slot name="button">create</x-slot>
    </x-create-category>

</x-app-layout>