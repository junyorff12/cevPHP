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
    	$v = isset($_GET["val"])?$_GET["val"]:1;
        $c = $v;
        $fat = 1;
        do {
            $fat = $fat * $c;
            $c--;
        } while ($c>=1);
        echo "$v ! = $fat";
    ?>
    <br/><a href="aula12_dowhileEX2.html">Voltar</a>
</div>
</body>
</html>
 