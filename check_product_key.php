<?php

// Abrufen des Produktschlüssels aus der GET-Anfrage
$productKey = $_GET["product_key"];

// Überprüfen der Gültigkeit des Produktschlüssels
if (checkProductKeyValidity($productKey)) {
    echo "valid";
} else {
    echo "invalid";
}

// Beispiel-Funktion zur Überprüfung der Gültigkeit des Produktschlüssels
function checkProductKeyValidity($productKey) {
    // Hier könnten Sie Ihre eigene Logik zur Überprüfung des Produktschlüssels einfügen,
    // z.B. durch Abfrage einer Datenbank oder durch Verwendung eines Algorithmus zur Validierung
    // des Schlüssels. In diesem Beispiel wird der Schlüssel "ABCDE-12345-FGHIJ-67890" als gültig
    // betrachtet, alle anderen Schlüssel als ungültig.
    return ($productKey == "ABCDE-12345-FGHIJ-67890");
}

?>
