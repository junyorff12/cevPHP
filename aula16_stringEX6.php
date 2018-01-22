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
 		$n = "Junyor FF12";
 		//$l = strtolower($n); minusculas.
 		//$l  = strtoupper($n); tudo maiusculas.
 		//$l  = ucfirst($n);//upper 1 letra da primeira palavra EX: ucfirst(strtolower($n));
 		//$j  = ucwords($n); //upper a primeira letra de todas as palavras da string.
 		//$l = strrev($n);
 		//$l = strpos($n, "FF12"); mostra posicao do termo na string.
 		//$l = stripos($n, "php"); //ignore o case sensitive no termo de busca. 
 		//$l  = substr_count($n, "F"); //quantas vezes o termo é encontrado..
 		$l  = substr($n, 0, 2); //mostra do indice 0 at-e o 2;
 		$j = substr($n, 5); //mostra do indice 5 ate o final.
 		$k =  substr($n, -4);// considera as 5 ultimas letras.
 		$i = substr($n, -4, 2);// considera as 5 ultimas e mostra somente as 2 primeiras.
 		echo "$l<br/>$j</br>$k</br>$i";
    ?>
</div>
</body>
</html>
 