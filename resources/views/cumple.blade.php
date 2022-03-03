<x-layouts.base title="Cumple">
    <form action="{{ route('cumple') }}" method="POST">
        @csrf

        <input type="date" name="cumple" max="{{ $now }}" value="{{ $fecha }}" />
        <input type="submit" value="enviar" />
    </form>

    @if ($submitted)
        @if ($daysleft === 0)
            <h2>Feliz {{ $age }} cumpleaños!!</h2>
        @else
            <p>Tienes {{ $age }} años y tu cumple será el próximo {{ $day_of_week }} {{ $birthday_day }},
                faltan {{ $daysleft }} días</p>
        @endif
    @endif

</x-layouts.base>
