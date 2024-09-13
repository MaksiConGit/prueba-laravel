@props(['title'])

<x-app-layout title="Edit category">

    <script src="https://cdn.tailwindcss.com"></script>
    <x-create-category>
        <x-slot name="form_action">{{route('categories.update', $category)}}</x-slot>
        <x-slot name="method">@method('PUT')</x-slot>
        <x-slot name="title">edit category</x-slot>
        <x-slot name="slot1">name</x-slot>
        <x-slot name="slot2">fecha rara</x-slot>
        <x-slot name="slot3">beneficios</x-slot>
        <x-slot name="slot4">slug</x-slot>
        <x-slot name="value1">{{$category->name}}</x-slot>
        <x-slot name="value2">{{$category->fecha_rara}}</x-slot>
        <x-slot name="value3">{{$category->beneficios}}</x-slot>
        <x-slot name="value4">{{$category->slug}}</x-slot>
        <x-slot name="button">edit</x-slot>
    </x-create-category>

</x-app-layout>