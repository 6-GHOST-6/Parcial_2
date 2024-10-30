<!-- resources/views/refrigeradores/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Refrigerador</title>
</head>
<body>
    <h1>Crear un Nuevo Refrigerador</h1>

    <!-- Formulario para crear un nuevo refrigerador -->
    <form action="{{ route('refrigeradores.store') }}" method="POST">
        @csrf

        <!-- Campo Marca -->
        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <!-- Campo Capacidad -->
        <label for="capacidad">Capacidad (en litros):</label>
        <input type="number" name="capacidad" required><br>

        <!-- Campo Tipo -->
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" required><br>

        <!-- Campo Eficiencia Energética -->
        <label for="eficiencia_energetica">Eficiencia Energética:</label>
        <input type="text" name="eficiencia_energetica" required><br>

        <button type="submit">Guardar</button>
    </form>

    <!-- Enlace para volver a la lista de refrigeradores -->
    <a href="{{ route('refrigeradores.index') }}">Regresar a la lista</a>
</body>
</html>
