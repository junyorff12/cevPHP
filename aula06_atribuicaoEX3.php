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
    //Variaveis referenciadas
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br />A variavel B vale $b";
    ?>
</div>
</body>
</html>
