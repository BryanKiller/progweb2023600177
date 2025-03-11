<?php
$x = $_GET['x'] ? (float)$_GET['x'] : 1;

$arriba = ($x ** 2 / 2) + (1 / sqrt($x));
$abajo = 3 + (1 / 2) * ($x ** 3);

$resultado = sqrt($arriba / $abajo);
?>

<html>
<head>
    <title>Calculo de X</title>
</head>
<body>
<h2 style="text-align: center;">Ejercicio E</h2><br> <div style="text-align: center;"><a href="Pag_Principal.php"> Regresar </a></div>
    <h2 style="text-align: center;">Evaluacion de la Expresion Matematica</h2>

    <p  style="text-align: center;">Calcula:</p>
    <img src="E.jpg" alt="formula" style="display: block; margin: auto;">

    <p style="text-align: center;">Para X =<?php echo $x; ?>, el resultado es: <?php echo $resultado; ?></p>


</body>
</html>

