<?php
$number = explode(",", $_POST$_POST["numero"]); 
$valor = $number % 2;
 echo"<ul>";
for($i = 1; $i <= count($number); $i++){
     if ($valor == 0){ 
        echo "<li>" $number[$i] "es par </li> ";
    }else{ 
        echo "<li>" $number[$i] "es impar </li>"; 
    } 
} echo"</ul>" 
?>