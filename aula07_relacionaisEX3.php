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
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $m = ($n1+$n2)/2;
    $sit = ($m<6)?"REPROVADO":"APROVADO";
    echo "A media é $m<br />";
    echo "A situcao do aluno é $sit";
    //  echo "A situcao do aluno é ".(($m<6)?"REPROVADO":"APROVADO"); usando concatenacao
    ?>
</div>
</body>
</html>
