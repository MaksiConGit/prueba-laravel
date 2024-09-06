@props(['title'])

<x-app-layout title="Create category">

    <script src="https://cdn.tailwindcss.com"></script>
    <x-create-category>
        <x-slot name="form_action">/categories</x-slot>
        <x-slot name="title">create category</x-slot>
        <x-slot name="slot1">name</x-slot>
        <x-slot name="slot2">fecha rara</x-slot>
        <x-slot name="slot3">beneficios</x-slot>
        <x-slot name="button">create</x-slot>
    </x-create-category>

</x-app-layout>