<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo Post</title>
</head>
<body>
    <h1>Ejemplo POST</h1>

 <form method="POST" action="">
        <label for="age">Introduce nombre:</label>
        <input type="text" id="age" name="edad">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['edad'])){
echo "hola " . $_POST['edad'] . " ¿como estas?<br>";
} }

?>