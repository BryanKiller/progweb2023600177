<?php
$x = $_GET['x'] ? (float)$_GET['x'] : 1;

$arriba = (sqrt(pow(2*$x,2) + pow(3,2)));
$abajo = 5;

$resultado = $arriba / $abajo + sqrt(pow($x,2));
?>

<html>
<head>
    <title>Calculo de X</title>
</head>
<body>
<h2 style="text-align: center;">Ejercicio C</h2><br> <div style="text-align: center;"><a href="Pag_Principal.php"> Regresar </a></div>
    <h2 style="text-align: center;">Evaluacion de la Expresion Matematica</h2>

    <p  style="text-align: center;">Calcula:</p>
    <img src="C.jpg" alt="formula" style="display: block; margin: auto;">

    <p style="text-align: center;">Para X =<?php echo $x; ?>, el resultado es: <?php echo $resultado; ?></p>


</body>
</html>

