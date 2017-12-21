<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
      $valor = $_GET["v"];
      $rq = sqrt($valor);
      echo "A raiz quadrada de $valor é " .number_format($rq, 2);
    ?>
    <br/>
    <br/>
    <br/>
    
    <a href="aula08_formsEX1.html"> Voltar</a>
</div>
</body>
</html>
