<?php
if (isset($_POST['key'])) {
    $key = $_POST['key'];
    // Hier sollte der Code zur Überprüfung des Produktschlüssels stehen
    // Wenn der Schlüssel gültig ist, geben Sie "Valid" zurück, ansonsten "Invalid"
    if ($key == "123456789") {
        echo "Valid";
    } else {
        echo "Invalid";
    }
} else {
    echo "Missing key parameter";
}
?>
