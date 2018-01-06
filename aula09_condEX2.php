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
      $ano = isset($_GET["ano"])?$_GET["ano"]:"1900";
      $idade = date("Y") - $ano;
      echo "Voçe nasceu em $ano e tem $idade anos <br/>";
      if ($idade<16) {
        $tp = "Não vota";
      }elseif (($idade>=16 && $idade<18)||($idade > 65)) {
          $tp = "Voto opcional";
        }else{
          $tp = "Voto obrigatorio";
        }
      echo "Para essa idade, $tp";
    ?>
    <br /><a href="aula09_condEX2.html">Voltar</a>
</div>
</body>
</html>
