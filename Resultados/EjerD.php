<?php
$x = $_GET['x'] ? (float)$_GET['x'] : 1;

$arriba = (1/2 + 1/4 + 1/8) * pow($x,1/3);
$abajo = ((sqrt($x)/2) + (3*$x**2)/4);

$resultado = $arriba / $abajo;
?>

<html>
<head>
    <title>Calculo de X</title>
</head>
<body>
<h2 style="text-align: center;">Ejercicio D</h2><br> <div style="text-align: center;"><a href="Pag_Principal.php"> Regresar </a></div>
    <h2 style="text-align: center;">Evaluacion de la Expresion Matematica</h2>

    <p  style="text-align: center;">Calcula:</p>
    <img src="D.jpg" alt="formula" style="display: block; margin: auto;">

    <p style="text-align: center;">Para X =<?php echo $x; ?>, el resultado es: <?php echo $resultado; ?></p>


</body>
</html>

