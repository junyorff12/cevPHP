<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $a = 3;
    $b = "3";
    $r = ($a==$b)?"SIM":"NAO";//igual mas nçao do mesmo tipo, === identico e do mesmo tipo.
    echo "As variaveis A e B sao iguais? $r";
    ?>
</div>
</body>
</html>
