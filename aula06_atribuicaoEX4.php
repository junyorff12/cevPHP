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
    //Variaveis de variaveis
    $x = "abc";
    $$x = "def";
    echo "O conteudo da variavel X e $x.";
    echo "<br />A variavel ABC recebeu o valor $abc.";
    ?>
</div>
</body>
</html>
