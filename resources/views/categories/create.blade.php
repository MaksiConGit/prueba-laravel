@props(['title'])

<x-app-layout title="Create category">

    <script src="https://cdn.tailwindcss.com"></script>
    <x-create-category>
        <x-slot name="form_action">{{route('categories.index')}}</x-slot>
        <x-slot name="method"></x-slot>
        <x-slot name="title">create category</x-slot>
        <x-slot name="slot1">name</x-slot>
        <x-slot name="slot2">fecha rara</x-slot>
        <x-slot name="slot3">beneficios</x-slot>
        <x-slot name="slot4">slug</x-slot>
        <x-slot name="value1"></x-slot>
        <x-slot name="value2"></x-slot>
        <x-slot name="value3"></x-slot>
        <x-slot name="value4"></x-slot>
        <x-slot name="button">create</x-slot>
    </x-create-category>

</x-app-layout>