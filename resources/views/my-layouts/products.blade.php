<!-- resources/views/my-layouts/products.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joystick Junction</title>
    <link rel="icon" href="/images/joystick.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Joystick Junction</h1>
        <nav>
            <ul>
                <li><a href="/inicio">Inicio</a></li>
                <li><a href="/productos">Productos</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 - Joystick Junction </p>
    </footer>
</body>
</html>
