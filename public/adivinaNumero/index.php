<!DOCTYPE html>
<html>
<head>
    <title>Adivina el número</title>
</head>
<body>
    <h1>Adivina el número</h1>

    <?php
    // Definimos el número a adivinar
    $correctNumber = 42;


    $guess = '';
    $message = '';

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $guess = $_POST["guess"];

        if (is_numeric($guess)) {
            if ($guess == $correctNumber) {
                $message = "Felicidades, has encontrado el número: $correctNumber";
            } elseif ($guess < $correctNumber) {
                $message = "Prueba de nuevo. El número que buscas es más ALTO";
            } else {
                $message = "Prueba de nuevo. El número que buscas en más BAJO";
            }
        } else {
            $message = "Introduce un valor numérico.";
        }
    }
    ?>

    <p><?php echo $message; ?></p>

    <form method="POST" action="">
        <label for="guess">Introduce un número:</label>
        <input type="text" id="guess" name="guess" value="<?php echo $guess; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
