<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../operadores_aritmeticos_php/img/file-code-solid.svg" type="image/x-icon">
    <title>IMC</title>
</head>
<body>
    <h1>
        hola mundo
    </h1>
    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        echo "su peso es: ".$peso."<br><br>";
        echo "su altura es: ".$altura."<hr>";
        $imc = $peso/($altura *$altura) ;
        echo "TU IMC es: ".$imc."<br><br>";
        if ($imc < 18.5) {
            echo "<h2>tu indice de masa corporal es: ".$imc."<br> tu peso es bajo. </h2>";
        } elseif ($imc >= 18.5 &&  $imc <=24.9) {
            echo "<h2>tu indice de masa corporal es: ".$imc."<br> tu peso es normal. </h2>";
        } elseif ($imc >= 25 &&  $imc <=29.9) {
            echo "<h2>tu indice de masa corporal es: ".$imc."<br> tienes sobrepeso. </h2>";
        } elseif ($imc >= 30 &&  $imc <=34.9) {
            echo "<h2>tu indice de masa corporal es: ".$imc."<br> tienes obesidad de tipo I. </h2>";
        }
    ?>
    <button type="submit"><a href="index.html">volver</a></button>
</body>
</html>