<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buscar = trim($_POST["buscar"]);
    $parrafo = trim($_POST["texto"]);

    $resultado = str_ireplace($buscar, "<mark>$buscar</mark>", $parrafo);

    echo "<h3>Texto original:</h3>";
    echo "<p>$parrafo</p>";
    echo "<h3>Se busca:<h3>";
    echo "<p>$buscar</p>";
    echo "<h3>Texto con coincidencias resaltadas:</h3>";
    echo "<p>$resultado</p>";
}
?>