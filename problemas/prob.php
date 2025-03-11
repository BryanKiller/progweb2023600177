<?php
$x = $_GET['x'] ? (float)$_GET['x'] : 1;
$y = $_GET['y'] ? (float)$_GET['y'] : 1;

// Ejercicio A
$resultadoA = (1 / $x) + (($x + $y) / 3) + 2 * ($x / $y);

// Ejercicio B
$arribaB = 1/2 * $x + (3+$x)/2 * (2 * ($x**2));
$abajoB = (2+3)*$x;
$resultadoB = $arribaB / $abajoB;

// Ejercicio C
$arribaC = sqrt(pow(2*$x,2) + pow(3,2));
$abajoC = 5;
$resultadoC = $arribaC / $abajoC + sqrt(pow($x,2));

// Ejercicio D
$arribaD = (1/2 + 1/4 + 1/8) * pow($x,1/3);
$abajoD = ((sqrt($x)/2) + (3*$x**2)/4);
$resultadoD = $arribaD / $abajoD;

// Ejercicio E
$arribaE = ($x ** 2 / 2) + (1 / sqrt($x));
$abajoE = 3 + (1 / 2) * ($x ** 3);
$resultadoE = sqrt($arribaE / $abajoE);
?>

<html>
<head>
    <title>Calculo de Expresiones Matematicas</title>
</head>
<body>
    <h2 style="text-align: center;">Calculo de Expresiones Matematicas</h2>
    
    <h3 style="text-align: center;">Resultados</h3>
    <ul style="text-align: center; list-style: none;">
    <img src="A.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio A:</b> <?php echo $resultadoA; ?></li><br>
        <img src="B.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio B:</b> <?php echo $resultadoB; ?></li><br>
        <img src="C.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio C:</b> <?php echo $resultadoC; ?></li><br>
        <img src="D.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio D:</b> <?php echo $resultadoD; ?></li><br>
        <img src="E.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio E:</b> <?php echo $resultadoE; ?></li>
        
    </ul>
</body>
</html>
