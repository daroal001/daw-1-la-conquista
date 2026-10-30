<?php
// Levantamos una sesión
session_start();
$adivina = 0;

// Inicializamos los intentos si no existe
if (!isset($_SESSION['veces'])) {
    $_SESSION['veces'] = 0;
} 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST["numero"];
    if ($numero == $adivina) {
        echo "Número adivinado! en " . $_SESSION['veces'];
        $_SESSION['veces'] = 0;
    } else {
        $_SESSION['veces']++;
        echo "No es el número. Intentos: " . $_SESSION['veces'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adivina el número</title>
</head>
<body>
<form method="post" action="">
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required><br>

        <input type="submit" value="Prueba">
    </form>
</body>
</html>
