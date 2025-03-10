<?php
// evitamos el 0
$x = $_GET['x'];

// Calcular el numerador y denominador de la expresión
$arriba = ($x ** 2 / 2) + (1 / sqrt($x));
$abajo = 3 + (1 / 2) * ($x ** 3);

//calculamos el resultado final
$resultado = sqrt($arriba / $abajo);
?>

<html>
<head>
    <title>Calculo de X</title>
</head>
<body>

    <h2 style="text-align: center;">Evaluación de la Expresión Matemática</h2>

    <p  style="text-align: center;">Calcula:</p>
    <img src="XX.jpg" alt="formula" style="display: block; margin: auto;>

    <p style="text-align: center;">Para X =<?php echo $x; ?>, el resultado es: <?php echo $resultado; ?></p>


</body>
</html>

