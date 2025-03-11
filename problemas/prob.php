<?php
$x = isset($_GET['x']) ? (float)$_GET['x'] : 1;
$y = isset($_GET['y']) ? (float)$_GET['y'] : 1;

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
    <title>Cálculo de Expresiones Matemáticas</title>
</head>
<body>
    <h2 style="text-align: center;">Cálculo de Expresiones Matemáticas</h2>
    
    <h3 style="text-align: center;">Resultados</h3>
    <ul style="text-align: center; list-style: none;">
    <img src="A.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio A:</b> <?php echo number_format($resultadoA, 4); ?></li><br>
        <img src="B.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio B:</b> <?php echo number_format($resultadoB, 4); ?></li><br>
        <img src="C.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio C:</b> <?php echo number_format($resultadoC, 4); ?></li><br>
        <img src="D.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio D:</b> <?php echo number_format($resultadoD, 4); ?></li><br>
        <img src="E.jpg" alt="formula" style="display: block; margin: auto;">
        <li><b>Ejercicio E:</b> <?php echo number_format($resultadoE, 4); ?></li>
        
    </ul>
</body>
</html>
