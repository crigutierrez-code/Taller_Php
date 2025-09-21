<?php
$number = explode(",", $_POST$_POST["numero"]); 
echo"Promedio";
for($i = 1; $i <= count($number); $i++){
    $suma = $number[$i-1] + $number[$i]; 
}
$Pro = $suma/ count($number);
echo "el promedio de los datos es:" . $Pro

echo"media";
$med = count($number)% 2;
echo "la media de los datos es :".$number[$med];

 echo"moda";
for($i = 1; $i <= count($number); $i++){ 
}
?>