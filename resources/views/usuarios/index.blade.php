@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1 class="mb-4">Lista de Usuarios</h1>
@stop

@section('content')

    <a href="{{ route('usuarios.create') }}" class="mb-3 btn btn-primary">
        <i class="fas fa-user-plus"></i> CREAR NUEVO USUARIO
    </a>

    <div class="table-responsive">
        <table id="empleados" class="table shadow-sm table-hover table-striped table-bordered" style="width:100%">
            <thead class="text-white bg-primary">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col" class="text-center">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td class="text-center">{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            @foreach ($usuario->roles as $rol)
                                <span class="badge bg-info text-dark me-1"
                                    style="font-size: 1rem">{{ $rol->description }}</span>
                            @endforeach
                        </td>

                        <td class="text-center">
                            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
                                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                {{-- <a href="{{ route('usuarios.show', $usuario) }}" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-eye"></i> Ver
                                </a> --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
                                    <i class="fas fa-trash"></i> Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
