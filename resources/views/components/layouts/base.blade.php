<!DOCTYPE html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <div>
        <h1 style="text-align: left">{{ $title }}</h1>


        <nav style="text-align: left; margin-bottom: 2em;">
            @if (isset($nav) && is_array($nav))
                @foreach ($nav as $route => $content)
                    <x-button href="{{ route($route) }}">
                        {{ $content }}
                    </x-button>
                @endforeach
            @endif
        </nav>

        <div>
            {{ $slot }}
        </div>
    </div>

</body>

</html>
