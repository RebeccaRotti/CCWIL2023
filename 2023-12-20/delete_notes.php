<?php
if($_SERVER['REQUEST_METHOD'] === 'GET') { // Überprüfung ob der Request vom Type GET ist
    $noteIndex = intval($_GET['index']); // Speichere den Parameter als integer in die Variable
    $notesFile = 'notes.txt'; // Speichere den Namen des Files in die Variable
    $lines = file($notesFile); // Speichere den gesamten Inhalt des Files als Array in die Variable
    $file = fopen($notesFile, 'w'); // Öffne das FIle im write Modus
    if($file) { // wenn das File existiert
        foreach ($lines as $index => $line) { // für jeden Eintrag im Array inkl Index
            if($index != $noteIndex) { // wenn der Index nicht gleich dem Übergabeparameter aus dem Link ist
                fwrite($file, $line); // schreibe die Zeile in das File
            }
        }
          fclose($file); // schließe das File
    }
}
header('Location: index.php'); // leite auf die Index wieder retour
