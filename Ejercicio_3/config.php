<?php
$number = explode(",", $_POST["numero"]); 

echo "La lista de datos dada es: " . implode(", ", $number) . "<br>";

echo"Promedio <br>";
$suma = 0;
foreach($number as $valor){
    $suma += floatval(trim($valor));
}
$Pro = $suma/ count($number);
echo "el promedio de los datos es:" . $Pro ."<br>";

echo"media <br>";
sort($number);
$med = count($number);
if ($med % 2== 0){
    $n1=$number[$med/2 -1] ;
    $n2=$number[$med/2 ];
    $mediana = ($n1 + $n2) / 2;
}else{
    $mediana = $number[floor($med/2)];
}
echo "la media es : $mediana <br>";


 echo"moda <br>";
$modaN = null;
$moda1=0; 
for($j = 0; $j < count($number); $j++){
    $moda =0;
for($i = 0; $i < count($number); $i++){
    if ($number[$j]== $number[$i]){
        $moda++;
    }
}
    if($moda >$moda1){
        $moda1 = $moda;
        $modaN = $number[$j];
    }
}
echo "la moda es:". $modaN;
?>