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
      $op = isset($_GET["Estado"])?$_GET["Estado"]:1;
      switch ($op) {
        case 1:
        case 4:
        case 23:
        case 3:
        case 14:
        case 27:
        case 22:
          $r = "Regiao Norte";
          break;
        case 10:
        case 18:
        case 7:
        case 20:
        case 17:
        case 15:
        case 26:
        case 2:
        case 5:
          $r = "Região Nordeste";
          break;  
        case 12:
        case 21:
        case 9:
          $r = "Região Centro-Oeste";
          break;
        case 25:
        case 19:
        case 8:
        case 13:    
          $r = "Região sudeste";
         
          break;
        case 16:
        case 22:
        case 24:
          $r = "Região Sul";
        
          break;   
      }
      echo "Voce esta na $r";
    ?>
    <br/><a href="aula10_condEX3.html">Voltar</a>
</div>
</body>
</html>
