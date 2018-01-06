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
      $n1 = isset($_GET["n1"])?$_GET["n1"]:0.0;
      $n2 = isset($_GET["n2"])?$_GET["n2"]:0.0;
      $media = ($n1 + $n2)/2;
      if($media<4){
        $s = "Reprovado";
      } elseif ($media>=4 && $media<7) {
        $s = "de recuperacao";
      }else {
        $s = "Aprovado";
      }
      echo "A media foi igual a $media<br />O aluno esta: $s";
    ?>
    <br /><a href="aula09_condEX3.html">Voltar</a>
</div>
</body>
</html>
