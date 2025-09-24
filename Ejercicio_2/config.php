<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $opcion = $_POST["opcion"];

    echo '<link rel="stylesheet" href="style.css">'; // conecta los estilos

    echo '<div class="container">'; // caja centrada como en el index
    if ($opcion == "fibonacci" && $numero >= 0) {
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $numero; $i++) {
            $fibonacci = $a + $b;
            $a = $b;
            $b = $fibonacci;
        }
        echo "<p>El número Fibonacci en la posición $numero es: $a</p>";

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
        echo "<p>El factorial de $numero es: $factorial</p>";

    } else {
        echo "<p>Opción no válida.</p>";
    }

    // botón de regreso con clases css
    echo '<a href="index.html" class="btn btn-secondary">Regresar</a>';
    echo '</div>';
}
?>