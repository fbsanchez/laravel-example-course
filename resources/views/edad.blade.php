<form action="{{route('edad')}}" method="POST">
    @csrf

    <input type="date" name="fecha" max="{{$now}}" />
    <input type="submit" value="enviar"/>
</form>

<a href="hola"><button>Volver</button></a>

@if ($submitted)
    <p>Has enviado {{$fecha}}</p>
    <p>Han pasado:</p>
    <ul>
        <li>Años: {{$years}}</li>
        <li>Meses: {{$months}}</li>
        <li>Días: {{$days}}</li>
    </ul>
@endif
