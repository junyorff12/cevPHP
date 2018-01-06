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
      $idade = date("Y") - $ano;
      echo "Nasceu em $ano<br />";
      echo "e tem $idade anos.<br />";
      if ($idade>=18) {
        $v = "pode votar";
        $d = "pode dirigir";
      }else {
        $v = "não pode votar";
        $d = "não pode dirigir";
      }
      echo "E com essa idade voce $v e tambem $d";
    ?>
    <p><a href="aula09_condEX1.html">Voltar</a><p>
</div>
</body>
</html>
