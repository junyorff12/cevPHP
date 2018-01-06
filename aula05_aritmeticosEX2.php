<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>PHP 7</title>
</head>
<body>
<div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2>Valores recebidos $n1 e $n2</h2>";
    $media  = ($n1 + $n2)/2;
    echo "A soma vale: ".($n1 + $n2);
    echo "<br/>A subtracao vale: ".($n1-$n2);
    echo "<br/>A multiplicação vale: ".($n1*$n2);
    echo "<br/>A divisao vale: ".($n1/$n2);
    echo "<br/>O modulo vale: ".($n1%$n2);
    echo "<br />A media vale: $media";
    ?>
</div>
</body>
</html>
