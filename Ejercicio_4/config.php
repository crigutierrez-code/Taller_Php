<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ConA = explode(",", $_POST["ConA"]);
    $ConB = explode(",", $_POST["ConB"]);

    $ConA = array_map('intval', array_map('trim', $ConA));
    $ConB = array_map('intval', array_map('trim', $ConB));

    $ConA = array_unique($ConA);
    $ConB = array_unique($ConB);

    echo "<h2>Conjuntos ingresados</h2>";
    echo "Conjunto A: {" . implode(", ", $ConA) . "}<br>";
    echo "Conjunto B: {" . implode(", ", $ConB) . "}<br>";

    echo "<h2>Unión</h2>";
    $union = array_unique(array_merge($ConA, $ConB));
    echo "A ∪ B = {" . implode(", ", $union) . "}<br>";

    echo "<h2>Intersección</h2>";
    $interseccion = array_intersect($ConA, $ConB);
    echo "A ∩ B = {" . implode(", ", $interseccion) . "}<br>";

    // Diferencias
    echo "<h2>Diferencias</h2>";
    $diferenciaAB = array_diff($ConA, $ConB);
    echo "A - B = {" . implode(", ", $diferenciaAB) . "}<br>";

    $diferenciaBA = array_diff($ConB, $ConA);
    echo "B - A = {" . implode(", ", $diferenciaBA) . "}<br>";
}
?>