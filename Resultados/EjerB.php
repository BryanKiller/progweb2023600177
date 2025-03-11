<?php
$x = isset($_GET['x']) ? (float)$_GET['x'] : 1;

$arriba = 1/2 * $x + (3+$x)/2 * (2 * ($x**2)     );
$abajo = (2+3)*$x; 

$resultado = $arriba / $abajo;
?>

<html>
<head>
    <title>Calculo de X</title>
</head>
<body>
<h2 style="text-align: center;">Ejercicio B</h2><br> <div style="text-align: center;"><a href="Pag_Principal.php"> Regresar </a></div>
    <h2 style="text-align: center;">Evaluacian de la Expresian Matematica</h2>

    <p style="text-align: center;">Calcula:</p>
    <img src="B.jpg" alt="Fórmula" style="display: block; margin: auto;">

    <p style="text-align: center;">
        Para X = <?php echo $x; ?>, el resultado es: 
        <?php echo number_format($resultado, 4); ?>
    </p>

</body>
</html>
