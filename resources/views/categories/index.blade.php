<x-app-layout title='Show categories'>
    <h1>Categories</h1>
    <ul>
        @foreach ($categories as $category)
        <li>
            <a href="/categories/{{$category->id}}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
    <a href="/categories/create">Add a category</a>
</x-app-layout>