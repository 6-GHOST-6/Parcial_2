<!-- resources/views/refrigeradores/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Refrigerador</title>
</head>
<body>
    <h1>Detalles del Refrigerador</h1>

    <p><strong>Marca:</strong> {{ $refrigerador->marca }}</p>
    <p><strong>Capacidad:</strong> {{ $refrigerador->capacidad }} L</p>
    <p><strong>Tipo:</strong> {{ $refrigerador->tipo }}</p>
    <p><strong>Eficiencia Energética:</strong> {{ $refrigerador->eficiencia_energetica }}</p>

    <!-- Enlace para volver a la lista de refrigeradores -->
    <a href="{{ route('refrigeradores.index') }}">Regresar a la lista</a>
</body>
</html>
