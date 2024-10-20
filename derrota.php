<?php

if (isset($_GET['palabra'])) {
    $palabra = htmlspecialchars($_GET['palabra']);
} else {
    $palabra = 'Desconocida';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Derrota</title>
    <link rel="stylesheet" href="page-styles.css">
</head>
<body>
    <div class="container">
        <h1>Lo siento. Has perdido</h1>
        <p>La palabra es: <?php echo $palabra; ?></p>
        <a href="index.php?reiniciar=true"><button>Jugar de nuevo</button></a>
    </div>
</body>
</html>