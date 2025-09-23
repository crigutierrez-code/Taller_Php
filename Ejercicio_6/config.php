<!-- archivo: divisible.php -->
<?php
$a = $_POST["a"];
$b = $_POST["b"];

if ($a % $b == 0) {
    echo "El número $a es divisible entre el número $b";
} else {
    echo "El número $a no es divisible entre el número $b";
}
?>
