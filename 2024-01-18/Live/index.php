<?php
$data = [
        ['position' => 1, 'name' => 'Spieler A', 'points' => 100],
        ['position' => 2, 'name' => 'Spieler B', 'points' => 55],
        ['position' => 3, 'name' => 'Spieler C', 'points' => 72],
        ['position' => 4, 'name' => 'Spieler D', 'points' => null],
        ['position' => 5, 'name' => 'Spieler E', 'points' => 43],
        ['position' => 6, 'name' => null, 'points' => 69],
        ['position' => 7, 'name' => 'Spieler G', 'points' => 85],
        ['position' => 8, 'name' => 'Spieler H', 'points' => 102],
        ['position' => 9, 'name' => 'Spieler I', 'points' => null],
        ['position' => 10, 'name' => 'Spieler J', 'points' => 4],
        // Weitere Einträge
    ];


    // usort — Sortiert ein Array nach Werten unter Verwendung einer benutzerdefinierten Vergleichsfunktion (hier mit einer anonymen Funktion)
    usort($data, function ($a , $b) {
        // Sortiere absteigend nach Punkten mit dem Spaceship Operator (<=>)
        return $b['points'] <=> $a['points'];
    })

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangliste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Der Verein der Freizeit</h1>
</header>
<main>
    <article class="rating">
        <h2>Die neuesten Wertungen</h2>
        <section class="container">
            <div class="item">
                <div class="header position">Spieler NR</div>
                <div class="header name">Name</div>
                <div class="header points">Punkte</div>
            </div>

            <!-- TODO -->
            <?php foreach ($data as $player): ?>
                <div class="item entry">
                    <div class="position"><?= $player['position'] ?></div>
                    <div class="name"><?= $player['name'] ?? '<i>unbekannt</i>' ?></div>
                    <div class="points"><?= $player['points'] ?? 0 ?></div>
                </div>
            <?php endforeach; ?>

        </section>
    </article>
    <article>
        <h2>Impressionen aus unserem Verein</h2>
        <section class="mosaic-gallery">
            <!-- TODO Klassen setzen-->
            <img src="img/02.jpg" alt="Bild 1" class="image img-01">
            <img src="img/01.jpg" alt="Bild 2" class="image img-02">
            <img src="img/03.jpg" alt="Bild 3" class="image img-03">
            <img src="img/04.jpg" alt="Bild 4" class="image img-04">
            <img src="img/05.jpg" alt="Bild 5" class="image img-05">
            <img src="img/06.jpg" alt="Bild 6" class="image img-06">
            <img src="img/07.jpg" alt="Bild 7" class="image img-07">
            <!-- Weitere Bilder hinzufügen -->
        </section>
    </article>
    <article>
        <section class="video">
            <iframe src="https://www.youtube.com/embed/TEtbGnCIQv8?si=wQKs8x1UNqhB4vwm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </section>
    </article>
    <article class="flex">
        <section class="flex-item">
            <figure>
                <img src="img/01.jpg" alt="Bild 01">
                <figcaption>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</figcaption>
            </figure>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
            </p>
        </section>

        <section class="flex-item">
            <figure>
                <img src="img/02.jpg" alt="Bild 01">
                <figcaption>Text 1</figcaption>
            </figure>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
            </p>
        </section>

        <section class="flex-item">
            <figure>
                <img src="img/03.jpg" alt="Bild 01">
                <figcaption>Text 1</figcaption>
            </figure>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
            </p>
        </section>

    </article>
</main>
</body>
</html>
