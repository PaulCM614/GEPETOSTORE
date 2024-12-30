@extends('layouts.app')

@section('content')
    <h3>Lista de Usuarios</h3>
    <a href="{{ route('users.create') }}" class="btn btn-success">Crear Usuario</a>

    <section class="section mt-4">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    @if (session('success'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'Entendido'
        });
    </script>
    @endif

    @if (session('error'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('error') }}',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
    </script>
    @endif

    @if (session('warning'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('warning') }}',
            icon: 'warning',
            confirmButtonText: 'Entendido'
        });
    </script>
    @endif

@endsection
