<!-- resources/views/refrigeradores/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Refrigerador</title>
</head>
<body>
    <h1>Editar Refrigerador</h1>

    <!-- Formulario de edición -->
    <form action="{{ route('refrigeradores.update', $refrigerador->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campo Marca -->
        <label for="marca">Marca:</label>
        <input type="text" name="marca" value="{{ $refrigerador->marca }}" required><br>

        <!-- Campo Capacidad -->
        <label for="capacidad">Capacidad (en litros):</label>
        <input type="number" name="capacidad" value="{{ $refrigerador->capacidad }}" required><br>

        <!-- Campo Tipo -->
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="{{ $refrigerador->tipo }}" required><br>

        <!-- Campo Eficiencia Energética -->
        <label for="eficiencia_energetica">Eficiencia Energética:</label>
        <input type="text" name="eficiencia_energetica" value="{{ $refrigerador->eficiencia_energetica }}" required><br>

        <button type="submit">Actualizar</button>
    </form>

    <!-- Enlace para volver a la lista de refrigeradores -->
    <a href="{{ route('refrigeradores.index') }}">Regresar a la lista</a>
</body>
</html>
