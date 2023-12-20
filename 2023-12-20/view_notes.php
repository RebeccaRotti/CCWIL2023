<?php
$notesFile = 'notes.txt'; // Speichere den Namen des txt Files in eine Variable
$lines = file($notesFile); // speicher den gesamten Inhalt des Files in ein Array (jede Zeile ist ein eigener Eintrag im Array)

if(count($lines) == 0) { // wenn kein Inhalt im File ist
    echo 'Es gibt keine Notizen';
} else {
    echo '<ul>';
    // var_dump($lines);
    foreach ($lines as $index => $line) {
        // Ausgabe der Notiz inkl Link mit der Stelle des Arrays als Parameter im Link
        echo '<li class="flex"><span>' . htmlspecialchars($line) . "</span> <a class='delete' href='delete_notes.php?index=$index'>Löschen</a></li>";
        // alternative Schreibweise: echo '<a href="delete_note.php?index=' . $index . '>Löschen</a>';
    }
    echo '</ul>';
}
