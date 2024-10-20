<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Has perdido!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="game-container">
        <h1>¡Has perdido!</h1>
        <p>La palabra era: <?php echo $palabra_correcta; ?></p>
        <a href="index.php"><button>Jugar de nuevo</button></a>
    </div>
</body>
</html>