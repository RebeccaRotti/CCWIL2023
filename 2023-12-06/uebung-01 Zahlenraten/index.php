<?php
// Start der Sitzung, um Daten über Seitenaufrufe hinweg zu speichern
session_start();

// Wenn der "Zurücksetzen"-Button geklickt wurde
if(isset($_POST['reset'])) {
    // Sitzung zerstören und zur Hauptseite zurückkehren
    session_destroy();
    // Um die Seite neu zu laden
    header("Location: index.php");
    exit;
}


// Überprüfung, ob die Zielnummer bereits in der Sitzung existiert
if(!isset($_SESSION['targetNumber'])) {
    // Wenn keine Zielnummer vorhanden ist, generieren Sie eine neue
    $_SESSION['targetNumber'] = generateRandomNumber();
    // Initialisieren des Arrays für Versuche
    $_SESSION['attempts'] = array();
}

// Die generierenRandomNumber-Funktion erzeugt eine Zufallszahl zwischen 1 und 100
function generateRandomNumber() {
    return rand(1, 100);
}

// Die playGame-Funktion vergleicht den geratenen Wert mit der Zielnummer und gibt eine Nachricht zurück
function playGame($targetNumber, $guess) {
    if($guess > $targetNumber) {
        return "Zu groß";
    } elseif($guess < $targetNumber) {
        return "Zu klein";
    } else {
        return "Richtig!";
    }
}

// Funktion zum Verwalten des gesamten Spiels
function runGame() {
    // Auslesen der targetNumber aus der Session
    $targetNumber = $_SESSION['targetNumber'];
    // Laden der vorherigen Versuche
    $attempts = $_SESSION['attempts'];

    if(isset($_POST['guess'])) {

        $guess = intval($_POST['guess']);
        $result = playGame($targetNumber, $guess);

        // Den aktuellen Versuch zum Array der vorherigen Versuche hinzufügen
        $attempts[] = array('guess' => $guess, 'result' => $result);
        if($result === 'Richtig!') {
            // Wenn das Spiel gewonnen wurde, Zielnummer zurücksetzen
            unset($_SESSION['targetNumber']);
        }
    }
    // Aktualisieren der vorherigen Versuche
    $_SESSION['attempts'] = $attempts;


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zahlenrätsel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
              crossorigin="anonymous">
    </head>
    <body class="container mt-5">
    <form method="post">
        <button type="submit" class="btn btn-danger mt-3 float-end" name="reset">Spiel zurücksetzen</button>
    </form>
    <h1 class="mb-4">Zahlenrätsel</h1>
    <form method="post">
        <div class="mb-3">
            <label for="guess" class="form-label">Geben Sie Ihre Schätzung ab (1-100):</label>
            <input type="number" class="form-control" id="guess" name="guess" min="1" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Schätzen</button>
    </form>

    <?php
        if(isset($result)) {
            echo '<div class="alert alert-info mt-3">' . $result . '</div>';
        }
        if(!empty($attempts)) {
            echo '<div class="mt-3"><h2>Vorherige Versuche.</h2>';
            echo '<ul>';
            foreach($attempts as $attempt) {
                // var_dump($attempt);
                echo '<li>Die Schätzung: ' . $attempt['guess'] . ', Ergebnis: ' . $attempt['result'] . '</li>';
            }
            echo '</ul></div>';
        }
    ?>

    </body>
    </html>

    <?php } ?>
    <?php runGame(); ?>
