<?php

// TODO

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
    // TODO
    ?>
    </body>
    </html>
    <?php
    // TODO
?>
