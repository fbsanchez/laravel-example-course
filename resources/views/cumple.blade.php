<form action="{{route('cumple')}}" method="POST">
    @csrf

    <input type="date" name="cumple" max="{{$now}}" value="{{$fecha}}"/>
    <input type="submit" value="enviar"/>
</form>

<a href="hola"><button>Volver</button></a>

@if ($submitted)
    @if ($daysleft === 0)
        <h2>Felicidades!!</h2>
    @else
        <p>Tienes {{$age}} y tu cumple será el próximo {{$day_of_week}} {{$birthday_day}}, faltan {{$daysleft}} días</p>
    @endif
@endif
