<style type="text/css">
    td:last-child * {
        display: inline;
    }

</style>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Slug</th>
            <th>Estado</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td><a href="{{ route('categorias.show', $categoria) }}">{{ $categoria->nombre }}</a></td>
                <td>{{ $categoria->slug }}</td>
                <td>{{ $categoria->estado }}</td>
                <td><button onclick="document.location = '{{ route('categorias.edit', $categoria) }}'">Editar</button>
                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<a href="{{ route('categorias.create') }}">Crear una nueva</a>
