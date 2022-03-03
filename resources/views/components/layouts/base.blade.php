<!DOCTYPE html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <div>
        <h1 style="text-align: left">{{ $title }}</h1>

        @if (isset($nav) && is_array($nav))
            <nav style="text-align: left; margin-bottom: 2em;">

                @foreach ($nav as $route => $content)
                    <x-button href="{{ route($route) }}">
                        {{ $content }}
                    </x-button>
                @endforeach

            </nav>
        @endif

        <div>
            {{ $slot }}
        </div>
    </div>

</body>

</html>
