<?php
    
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio = false;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>
    
<header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="logotipo de Bienes Raíces">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">

                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="icono tema oscuro">

                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Anuncios</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/logout">Cerrar Sesión</a>
                        <?php else: ?>
                            <a href="/login">Iniciar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div> <!-- .barra -->
            <?php if($inicio) { ?>
                <h1>Venta de casas y departamentos exclusivos y de lujo</h1>
            <?php } ?>
        </div> <!-- .contenedor -->
</header>

<?php echo $contenido; ?>

<footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="/nosotros.php">Nosotros</a>
                <a href="/anuncios.php">Anuncios</a>
                <a href="/blog.php">Blog</a>
                <a href="/contacto.php">Contacto</a>
            </nav>
        </div> <!-- .contenedor -->

        <p class="copyrigth">Todos los derechos reservados <?php echo date('Y')?> &copy;</p>

    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>
</html>