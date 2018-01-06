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
      $n = isset($_GET["num"])?$_GET["num"]:0;
      $o = isset($_GET["op"])?$_GET["op"]:1;
      switch ($o) {
        case '1':
          $r = $n * 2;
          break;
        case '2':
          $r = $n ^ 3;
          break;
        case '3':
          $r = sqrt($n);
      }
      echo "O resultado da operação foi $r";
    ?>
    <br /><a href="aula10_condEX1.html">Voltar</a>
</div>
</body>
</html>
