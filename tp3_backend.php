<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Ejercicio 1</p>
    <?php
    $i=1; while ($i <= 100) { print "<p> $i</p>\n"; $i++;
      // code...
    } ?>

<p>Ejercicio 2</p>
<?php
for ($i=100; $i >0 ; $i--) { print"<p>$i</p>\n";}
?>

<p>Ejercicio 3</p>
<?php
for ($i=2; $i <=100 ; $i=$i+2) {
  print"<p>$i</p>\n";
} ?>

<p>Ejercicio 4</p>
<?php
for ($i=1; $i <100 ; $i=$i+2) {
  print"<p>$i</p>\n";
} ?>

<p>Ejercicio 5</p>
<?php 
$extra=0;
for ($i=1; $i <=20 ; $i++) { 
   $extra= $i+$extra; print"$extra= $i+$extra\n";
}
?>

<p>Ejercicio 6</p>
<?php 
$extra=0;
for ($i=0; $i <=20 ; $i= $i+2) { 
   $extra= $i+$extra; print"$extra= $i+$extra\n"
}
?>
 </body>
</html>
