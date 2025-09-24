<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];

    echo '<link rel="stylesheet" href="style.css">';
    echo '<div class="container">';

    if ($a % $b == 0) {
        echo "<p>El número $a <strong>sí</strong> es divisible entre el número $b.</p>";
    } else {
        echo "<p>El número $a <strong>no</strong> es divisible entre el número $b.</p>";
    }

    // Botón para regresar
    echo '<a href="index.html" class="btn btn-secondary">Regresar</a>';

    echo '</div>';
}
?>