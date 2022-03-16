<?php $edit = isset($categoria); ?>

<form action="{{ $edit ? route('categorias.update', $categoria) : route('categorias.store') }}" method="POST">
    @csrf
    @if ($edit)
        @method('PUT')
    @endif
    <input type="text" name="nombre" placeholder="Nombre" value="{{ $edit ? $categoria?->nombre : '' }}" />
    <input type="text" name="slug" placeholder="Slug" value="{{ $edit ? $categoria?->slug : '' }}" />

    <input type="submit" value="{{ $edit ? 'Actualizar' : 'Crear' }}" />
</form>
