<ul>
    <li><span>Nombre: </span>{{ $categoria->nombre }}</li>
    <li><span>Slug: </span>{{ $categoria->slug }}</li>
    <li><span>Estado: </span>{{ $categoria->estado }}</li>
</ul>

<a href="{{ route('categorias.index') }}">volver</a>
