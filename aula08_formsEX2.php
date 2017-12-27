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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Não informado";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"Não informado";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Não informado";
        $idade = date("Y") - $ano;
        echo "$nome eh $sexo tem $idade anos.";
    ?>
    <p><a href="aula08_formsEX2.html">Voltar</a></p>
</div>
</body>
</html>
