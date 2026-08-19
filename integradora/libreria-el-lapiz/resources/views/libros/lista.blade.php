@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2>Librería El Lápiz</h2>
    </div>
    <div>
        <a href="/libros/nuevo" class="btn btn-primary">
            Registrar nuevo libro
        </a>
    </div>
</div>
<p class="lead">
    Librería El Lápiz es una librería de barrio que ofrece libros
    para estudiantes, lectores y familias.
</p>
<div class="alert alert-info">
    Hay {{ count($libros) }} libros en el catálogo.
</div>
<div class="card">
    <div class="card-header">
        <strong>Catálogo de libros</strong>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-primary">
                <tr>
                    <th>Título</th>
                    <th>Precio en Bs</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($libros as $libro)
                    <tr>
                        <td>
                            {{ $libro->titulo }}
                        </td>
                        <td>
                            {{ $libro->precio }} Bs
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center py-4">
                            No hay libros registrados todavía.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="mt-4">
    <strong>
        Catálogo atendido por Franz Alanes Fuentes
    </strong>
</div>
@endsection