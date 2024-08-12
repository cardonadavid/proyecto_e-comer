<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- Encabezado (Igual que en la página principal) -->

    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo de la tienda">
        </div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Carrito de Compras</a></li>
            </ul>
        </nav>
    </header>


    <!-- Lista de Productos -->
    <section class="lista-productos">
        <h2>Productos</h2>
        <div class="productos">
            <!-- Repite la estructura para cada producto -->
            <div class="producto">
                <img src="producto1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción breve del producto 1.</p>
                <p class="precio">$29.99</p>
                <button>Añadir al Carrito</button>
            </div>
            <!-- Añadir más productos aquí -->
        </div>
        <!-- Paginación -->
        <div class="paginacion">
            <a href="#">&laquo; Anterior</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Siguiente &raquo;</a>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer>
        <!-- (Pie de Página Aquí) -->
    </footer>
</body>

</html>