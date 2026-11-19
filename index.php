<?php

require_once("cad.php");

$cad = "";

if (isset($_POST["texto"]))
{
    $cad = $_POST["texto"];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones de cadenas</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<h1>Funciones de cadenas</h1>

<form method="POST">
    <label>Escribe una palabra o frase:</label>
    <input type="text" name="texto" required>
    <button type="submit">Analizar</button>
</form>

<?php

if ($cad != "")
{
    echo "<h2>Resultados</h2>";

    echo "Texto original: " . $cad . "<br>";

    echo "Cantidad de caracteres: " . contarCaracteres($cad) . "<br>";

    echo "Mayúsculas: " . convertirMayusculas($cad) . "<br>";

    echo "Minúsculas: " . convertirMinusculas($cad) . "<br>";

    echo "Texto invertido: " . invertirCadena($cad) . "<br>";

    echo "Palíndromo: " . esPalindromo($cad) . "<br>";

    echo "Cantidad de vocales: " . contarVocales($cad) . "<br>";
}

?>

</body>
</html>
