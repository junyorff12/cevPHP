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
      $ano= isset($_GET["ano"])?$_GET["ano"]:"1900";
      echo "Nasceu em $ano";
    ?>
    <p><a href="aula09_condEX1.html">Voltar</a><p>
</div>
</body>
</html>
