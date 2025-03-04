<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
<?php
        $fibo = array(1,1);
        $n = 2048;
        for($i = 2; $i < $n; $i++){
            $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
        }
        echo "numeros: <br>". implode("<br>", $fibo);
    ?>
</body>
</html>