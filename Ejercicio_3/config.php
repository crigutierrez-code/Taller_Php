<?php
$number = explode(",", $_POST["numero"]); 
echo"Promedio";
for($i = 1; $i <= count($number); $i++){
    $suma = $number[$i-1] + $number[$i]; 
}
$Pro = $suma/ count($number);
echo "el promedio de los datos es:" . $Pro;

echo"media";
$med = count($number)% 2;
echo "la media de los datos es :".$number[$med];

 echo"moda";
 $moda1=0; 
for($j = 1; $j <= count($number); $j++){
for($i = 1; $i >= count($number); $i++){
    if ($number[$j]== $number[$i]){
        $moda++;
        if($moda >$moda1){
            $modaN = $number[$i];
        }
    }

}
}
?>