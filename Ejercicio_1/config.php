<?php
$number = explode(",", $_POST["numero"]);
 echo"<ul>";
for($i = 0; $i < count($number); $i++){
     $valor = trim($number[$i]);
    if (filter_var($valor, FILTER_VALIDATE_INT) !== false){ 
            if ($valor%2 == 0){ 
                    echo "<li>" . $number[$i] . ":es número par </li> ";
            }else{ 
                    echo "<li>" . $number[$i] . ": es número impar </li>"; 
            } 
    }else{
            echo "<li>" . $number[$i] .": no es un número entero";
    }
}
?>