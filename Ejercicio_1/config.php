<?php
$number = explode(",", $_POST["numero"]); 
 echo"<ul>";
for($i = 1; $i <= count($number); $i++){
    $valor = $number[$i] % 2;
     if ($valor == 0){ 
        echo "<li>" . $number[$i] . "es par </li> ";
    }else{ 
        echo "<li>" . $number[$i] . "es impar </li>"; 
    } 
} echo"</ul>" 
?>