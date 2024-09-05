<x-app-layout title='Categories'>
    <h1>Categories</h1>
    <ul>
        @foreach ($categories as $category)
        <li>
            <a href="/categories/{{$category->id}}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</x-app-layout>