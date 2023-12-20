<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') { // Überprüfung ob der Request vom Type POST ist
    // $note = htmlspecialchars($_POST('note'));
    $note = $_POST['note']; // speichere den Input vom POST in die Variable
    if(!empty($note)) { // wenn die variable nicht leer ist
        $notesFile = 'notes.txt'; // name des Files in Variable speichern
        $file = fopen($notesFile, 'a'); // File öffnen im a modus
        if($file) { // wenn file vorhanden
            fwrite($file, $note . PHP_EOL); // füge eintrag hinzu und mach einen zeilenumbruch
            fclose($file); // schließe File
        }
    }
}
header('Location: index.php'); // leite auf index retour
