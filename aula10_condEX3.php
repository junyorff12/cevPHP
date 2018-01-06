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
          echo "Região Norte";
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
            echo "Região Nordeste";
            break;
        case 12:
        case 21:
        case 9:
            echo "Região Centro-Oeste";
            break;
          # code...
          break;
      }
    ?>
</div>
</body>
</html>
