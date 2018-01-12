<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <form method="get" action="aula12_dowhileEX3-1.php">
        Numero: 
        <select name="tab"> 
            <?php
            $c = 1;
            do{
              echo "<option value='$c'>$c</option>"; 
              $c++;
            }while($c<=10);
            ?>
        </select>

        <input type="submit" value="Tabuada"/>
    </form>
    
</div>
</body>
</html>
 