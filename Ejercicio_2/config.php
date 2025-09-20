<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $opcion = $_POST["opcion"];

    if ($opcion == "fibonacci" && $numero >= 0) {
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $numero; $i++) {
            $fibonacci = $a + $b;
            $a = $b;
            $b = $fibonacci;
        }
        echo "El número Fibonacci en la posición " . $numero . " es: " . $a;

    } elseif ($opcion == "factorial" && $numero > 0) {
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;

            if ($i < $numero) {
                echo $i . " x ";
            } else {
                echo $i . " = " . $factorial . "<br>";
            }
        }
        echo "El factorial de " . $numero . " es: " . $factorial;

    } else {
        echo "Opción no válida.";
        "butom";
    }
}
?>