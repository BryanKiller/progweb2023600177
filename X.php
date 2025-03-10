<?php
// Obtener el valor de x desde la URL, si no se proporciona, usar un valor por defecto (ejemplo: x = 1)
$x = isset($_GET['x']) ? (float)$_GET['x'] : 1;

// Evitar valores negativos o cero para evitar errores en la raíz cuadrada
if ($x <= 0) {
    die("El valor de x debe ser mayor que 0.");
}

// Calcular el numerador y denominador de la expresión
$arriba = ($x ** 2 / 2) + (1 / sqrt($x));
$abajo = 3 + (1 / 2) * ($x ** 3);

// Evitar división por cero
if ($abajo == 0) {
    die("El denominador no puede ser cero.");
}

// Calcular el resultado final
$resultado = sqrt($arriba / $abajo);
?>

<html>
<head>
    <title>Calculo de X</title>
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
</head>
<body>

    <h2 style="text-align: center;">Evaluación de la Expresión Matemática</h2>

    <p  style="text-align: center;">Calcula:</p>
    <p >$$\sqrt{\frac{\left(\frac{x^{2}}{2}+\frac{1}{\sqrt{x}}\right)}{3+\frac{1}{2}x^{3}}}$$</p>

    <p style="text-align: center;">Para X = <strong><?php echo $x; ?></strong>, el resultado es: <strong><?php echo $resultado; ?></strong></p>

    <p> $arriba = ($x ** 2 / 2) + (1 / sqrt($x)); $abajo = 3 + (1 / 2) * ($x ** 3);</p>

</body>
</html>