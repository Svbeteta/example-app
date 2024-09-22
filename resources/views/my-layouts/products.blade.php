<!-- resources/views/my-layouts/products.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Productos</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <header>
        <h1>Mi Tienda</h1>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/productos">Productos</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Mi Tienda</p>
    </footer>
</body>
</html>
