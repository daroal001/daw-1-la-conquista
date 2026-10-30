<!DOCTYPE html>
<html>
<head>
    <title>Suma de 4 números</title>
</head>
<body>
    <h1>Suma de 4 números</h1>
    
    <?php
    // Inicializamos variables para almacenar los datos y la suma.
    $suma = 0;
    $contador = 0;
    
    // Verificamos si se ha enviado el formulario.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Utilizamos un bucle while para pedir 4 datos.
        while ($contador < 4) {
            $numero = $_POST["numero$contador"];
            $suma += $numero;
            $contador++;
            /* Si se quiere realizar bien, sustituye las tres instrucciones anteriores por todo esto
            if (isset($_POST["numero$contador"])) { // Verificamos que existe y es distinta a NULL
                $numero = $_POST["numero$contador"];
                // Verificamos si el valor es numérico.
                if (is_numeric($numero)) {
                    $suma += $numero;
                    $contador++;
                } else {
                    echo "<p>Por favor, ingresa un número válido para el dato $contador.</p>";
                }
            }*/
        }
        
        // Mostramos el resultado.
        echo "<p>La suma de los 4 números es: $suma</p>";
    }
    ?>
    
    <form method="POST" action="">
        <?php
        // Utilizamos un bucle while para crear los campos de entrada.
        $contador = 0;
        while ($contador < 4) {
            echo "<label for='numero$contador'>Dato $contador:</label>";
            echo "<input type='number' id='numero$contador' name='numero$contador' required><br>";
            $contador++;
        }
        ?>
        <input type="submit" value="Calcular Suma">
    </form>
</body>
</html>