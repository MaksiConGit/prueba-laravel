<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>
        @isset($title)
            {{ $title == "" ? "Document"  : $title }}
        @else
            Document
        @endisset
    </title>

</head>
<body>

    <header>
        @isset($header)
            {{$header}}
        @endisset

        <nav>
            @isset($nav)
                @if ($nav == "")
                    <p class='text-white bg-black'>Navbar</p>
                @else
                    {{$nav}}
                @endif
            @endisset
        </nav>

    </header>

    <main>
        @isset($slot)
            {{$slot}}
        @endisset
    </main>

    <footer>
        @isset($footer)
            @if ($footer == "")
                <p class='text-white bg-black'>Footerr</p>
            @else
                {{$footer}}
            @endif
        @endisset
    </footer>
    
</body>
</html>