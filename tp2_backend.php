<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <?php
    $a= 20;
    if ($a>0) {echo "$a es un número positivo";
      // code...
    } ?>
    <h2>Ejercicio 2</h2>
    <?php
    $b=5;
    if (10>$b && $b>1) { echo "$b es menor a 10 y mayor a 1";}
   ?>
    <h3>Ejercicio 3</h3>
    <?php
    $c=1;
    if ($c<2 or $c>10) { echo "$c esta excluido en los valores entre 2 y 10";
      // code...
    }
     ?>
     <h4>Ejercicio 4</h4>
<?php
     $numero1= 7;
     $numero2= 25;
     $suma= $numero1 + $numero2;
     $resta= $numero1-$numero2;
     $multiplicacion= $numero1*$numero2;
     $division= $numero1/$numero2;
     $resto= $numero1%$numero2;
     if ($numero1>$numero2) { echo "$numero1 + $numero2= $suma ;  $numero1-$numero2= $resta";
       // code...
     } elseif ($numero1<$numero2) { echo "$numero1*$numero2= $multiplicacion; $numero1/$numero2= $division; $numero1%$numero2=$resto ";
       // code...
     } else { echo "Los números ingresados son iguales";
       // code...
     }
      ?>
  </body>
</html>
