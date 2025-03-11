<?php
$x = $_GET['x'] ? (float)$_GET['x'] : 1;
$y = $_GET['y'] ? (float)$_GET['y'] : 1;

$resultado = (1 / $x) + (($x + $y) / 3) + 2 * ($x / $y);
?>

<html>
<head>
    <title>Calculo de X,Y</title>
</head>
<body>
<h2 style="text-align: center;">Ejercicio A</h2><br> <div style="text-align: center;"><a href="Pag_Principal.php"> Regresar </a></div>
    <h2 style="text-align: center;">Evaluacion de la Expresion Matematica</h2>

    <p  style="text-align: center;">Calcula:</p>
    <img src="A.jpg" alt="formula" style="display: block; margin: auto;">

    <p style= "text-align: center;">Para X =<?php echo $x; ?></p>
    
    <p style= "text-align: center;">Para y =<?php echo $y; ?> <br><br>el resultado es: <?php echo $resultado; ?></p>


</body>
</html>