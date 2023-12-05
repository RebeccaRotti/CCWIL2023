<?php
// Beginne eine neue Sitzung fort
// ToDo

// Wenn der "Zurücksetzen"-Button geklickt wurde
// ToDo

// Überprüfe, ob die To-Do-Liste in der Session existiert, falls nicht, initialisiere sie
// ToDo

// Wenn das Formular gesendet wurde
// ToDo

/**
 * Funktion zur Anzeige der Aufgaben in der To-Do-Liste.
 */
function displayTasks() {
    // Überprüfe, ob die To-Do-Liste leer ist
    // ToDo
}
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-Liste mit Haken</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container mt-5">
<form method="post">
    <button type="submit" class="btn btn-danger mt-3 float-end" name="reset">Session zurücksetzen</button>
</form>
<h1>ToDo-Liste mit Haken</h1>

<form method="post">
    <div class="mb-3">
        <label for="task_title" class="form-label">Aufgabe hinzufügen:</label>
        <input type="text" class="form-control" id="task_title" name="task_title" required>
    </div>
    <button type="submit" class="btn btn-primary">Hinzufügen</button>
</form>

<h2>Aufgaben:</h2>
<?php displayTasks(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
