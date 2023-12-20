<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine Notizen</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 class="headline">Notizen</h1>
        <article>
            <form method="POST" action="add_notes.php">
                <section class="flex">
                    <label for="note">Neue Notiz</label>
                    <input type="text" name="note" id="note" placeholder="Deine Notiz" required>
                </section>
                <button type="submit">Hinzufügen</button>
            </form>
        </article>
        <article>
            <h2 class="headline">Meine Notizen</h2>
            <?php include 'view_notes.php'; ?>
        </article>
    </main>
</body>
</html>
