<?php
// Comprobar si se ha pasado la palabra por la URL
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
</head>
<body>
    <h1>Lo siento</h1>
    <p>Has perdido : La palabra era: <?php echo $palabra; ?></p>
    <a href="index.php?reiniciar=true"><button>Jugar de nuevo</button></a>
</body>
</html>