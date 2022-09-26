<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    echo "Hola Mundo"; ?>
    <br>
    <hr>
    <?php
    $hola = "Hola mundo";
    echo $hola; ?>
    <br>
    <hr>
    <?php
    $variable1 = 121;
    $variable2 = 11;
    $suma = $variable1 + $variable2;
    echo $suma;?>
    <br>
    <hr>
    <?php
    $resta = $variable1 - $variable2;
    echo $resta;
    ?>
    <br>
    <hr>
    <?php
    $multiplicacion = $variable1 * $variable2;
    echo $multiplicacion; ?>
    <br>
    <hr>
    <?php
    $division = $variable1 / $variable2;
    echo $division; ?>
    <br>
    <hr>
    <?php
    $resto = $variable1 % $variable2;
    echo $resto; ?>
    <br>
    <hr>

    <?php
    $gradosC = 20;
    $datof1 = 9/5;
    $datof2 = 32;
    $formula= ($gradosC * $datof1) + $datof2;
    echo $formula;  ?>
    <br>
    <hr>
    <?php
    $base = 18;
    $altura = 12;
    $perimetro = 2 * ($base + $altura); echo $perimetro;?>
    <br>
    <hr>
    <?php $area = $base * $altura; echo $area; ?>
    <?php
    $radio = 30;
    $pi = M_PI;
    $perimetroc = 2 * $pi * $radio;
    echo $perimetroc;
     ?>
     <br>
     <hr>
     <?php
     $areac = $pi * ($radio)**2;
     echo $areac;?>
    <?php  ?>


  </body>
</html>
