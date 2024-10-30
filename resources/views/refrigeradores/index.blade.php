<!-- resources/views/refrigeradores/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Refrigeradores</title>
</head>
<body>
    <h1>Lista de Refrigeradores</h1>

    <!-- Enlace para crear un nuevo refrigerador -->
    <a href="{{ route('refrigeradores.create') }}">Crear nuevo refrigerador</a>

    <!-- Mensaje de éxito al crear, actualizar o eliminar un refrigerador -->
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <!-- Listado de refrigeradores -->
    <ul>
        @foreach ($refrigeradores as $refrigerador)
            <li>
                <strong>Marca:</strong> {{ $refrigerador->marca }} - 
                <strong>Capacidad:</strong> {{ $refrigerador->capacidad }} L - 
                <strong>Tipo:</strong> {{ $refrigerador->tipo }} - 
                <strong>Eficiencia Energética:</strong> {{ $refrigerador->eficiencia_energetica }}

                <!-- Enlaces de acciones para cada refrigerador -->
                <a href="{{ route('refrigeradores.show', $refrigerador->id) }}">Ver</a>
                <a href="{{ route('refrigeradores.edit', $refrigerador->id) }}">Editar</a>
                <form action="{{ route('refrigeradores.destroy', $refrigerador->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>