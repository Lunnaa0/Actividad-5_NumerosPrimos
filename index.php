<?php
function esPrimo($numero) {
    if ($numero < 2) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // 
        }
    }
    return true; 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = intval($_POST['numero']);
    $resultado = esPrimo($numero) ? "es primo" : "no es primo";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <h1>¿Es primo?</h1>
    <form action="" method="POST">
        <label for="numero">Introduce un número:</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Comprobar">
    </form>

    <?php if (isset($resultado)): ?>
        <p>El número <?= $numero ?> <?= $resultado ?>.</p>
    <?php endif; ?>
</body>
</html>