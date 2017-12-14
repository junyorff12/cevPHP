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
    $atual = $_GET["aa"];// essa linha pega o dado na URL
    echo "O ano atual eh $atual e o ano anterior eh ".(--$atual);
    echo ".";
    ?>
</div>
</body>
</html>
