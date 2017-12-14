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
    $preco = $_GET["p"];
    echo "O preco do produto eh: R$" .number_format($preco,2);
    $preco += ($preco*0.10);
    echo "<br />O novo valor com 10% eh R$".number_format($preco, 2);
    ?>
</div>
</body>
</html>
