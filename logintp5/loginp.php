<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];
$ckuser= "Paula";
$ckpass= "1995" ;

if ($usuario==$ckuser && $contrasenia== $ckpass) {
  header("location:http://www.floraargentina.edu.ar/");
}
else {
  header("location:error.html");
}
?>
