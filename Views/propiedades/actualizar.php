<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a class="boton boton-verde" href="/admin">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php';?>
        <input class="boton boton-amarillo" type="submit" value="Actualizar Propiedad">
    </form>
</main>