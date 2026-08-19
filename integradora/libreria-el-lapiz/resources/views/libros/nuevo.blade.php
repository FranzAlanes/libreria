@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">
                    Registrar nuevo libro
                </h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>
                            Hay errores en el formulario:
                        </strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form
                    action="/libros/nuevo"
                    method="POST"
                >
                    @csrf
                    <div class="mb-3">
                        <label
                            for="titulo"
                            class="form-label"
                        >
                            Título del libro
                        </label>
                        <input
                            type="text"
                            id="titulo"
                            name="titulo"
                            class="form-control"
                            value="{{ old('titulo') }}"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="precio"
                            class="form-label"
                        >
                            Precio en Bs
                        </label>
                        <input
                            type="number"
                            id="precio"
                            name="precio"
                            class="form-control"
                            value="{{ old('precio') }}"
                        >
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Registrar libro
                    </button>
                    <a
                        href="/libros"
                        class="btn btn-secondary"
                    >
                        Volver al catálogo
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection