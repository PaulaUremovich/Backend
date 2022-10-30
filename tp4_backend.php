<!DOCTYPE html>
<body>
<p>Ejercicio 1:</p>
<?php 
$pares= ["2","4","6","8","10","12","14","16","18","20"];
foreach ($pares as $valor) {
    print "$valor\n";
};

?>

<p>Ejercicio 2:</p>
<?php 
$a1= ["Pedro", "Ana", "34","1"];
print_r($a1);

?>

<p>Ejercicio 3:</p>
<?php 
$asociativo1= ['Nombre;'=> "Pedro", 'Apellido:'=> "Torres", 'Dirección:'=> " Av. Mayor 3703
", 'Teléfono:'=> 1122334455];

?>

<p>Ejercicio 4:</p>
<?php 
$ciudades= ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
print "La ciudad con el índice 0 tiene el nombre $ciudades[0]\n";
print "La ciudad con el índice 1 tiene el nombre $ciudades[1]\n";
print "La ciudad con el índice 2 tiene el nombre $ciudades[2]\n";
print "La ciudad con el índice 3 tiene el nombre $ciudades[3]\n";
print "La ciudad con el índice 4 tiene el nombre $ciudades[4]\n";
print "La ciudad con el índice 5 tiene el nombre $ciudades[5]\n";
?>

<p>Ejercicio 5:</p>
<?php 
$ciudades= ['MD'=>"Madrid", 'BRC'=> "Barcelona", 'LD'=>"Londres",'NY'=> "New York",'LA'=> "Los Ángeles",'CCG'=> "Chicago"];
print "El índice de $ciudades[MD] es MD.\n";
print "El índice de $ciudades[BRC] es BRC.\n";
print "El índice de $ciudades[LD] es LD.\n";
print "El índice de $ciudades[NY] es NY.\n";
print "El índice de $ciudades[LA] es LA.\n";
print "El índice de $ciudades[CCG] es CCG,.\n";
?>
</body>

</html>
