<?php
if(isset($_POST["submit"])) {
    $zielverzeichnis = "uploads/"; // Hier legst du das Verzeichnis fest, in dem die Dateien gespeichert werden sollen.

    $zieldatei = $zielverzeichnis . basename($_FILES["datei"]["name"]);

    if (move_uploaded_file($_FILES["datei"]["tmp_name"], $zieldatei)) {
        echo "Die Datei wurde erfolgreich hochgeladen.";
    } else {
        echo "Beim Hochladen der Datei ist ein Fehler aufgetreten.";
    }
}
?>
