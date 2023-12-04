
<?php
// Produkte und Preise mit Bildern und Kategorien
$products = array(
    "product1" => array("name" => "Produkt 1", "price" => 10, "category" => "Kategorie A", "image" => "https://unsplash.it/600/400"),
    "product2" => array("name" => "Produkt 2", "price" => 15, "category" => "Kategorie B", "image" => "https://unsplash.it/600/400"),
    "product3" => array("name" => "Produkt 3", "price" => 20, "category" => "Kategorie A", "image" => "https://unsplash.it/600/400"),
    "product4" => array("name" => "Produkt 4", "price" => 25, "category" => "Kategorie C", "image" => "https://unsplash.it/600/400"),
    "product5" => array("name" => "Produkt 5", "price" => 30, "category" => "Kategorie B", "image" => "https://unsplash.it/600/400")
);

// Warenkorb als Array
// TODO

// Hinzufügen von Produkten zum Warenkorb
// TODO

// Gesamtbetrag berechnen
// TODO
$total = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online-Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<main class="container-fluid">
    <h1>Online-Shop</h1>
    <article>
        <h2>Produkte</h2>
        <form method="post" class="p-3 m-3">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- ToDo -->
                    <section class="col">
                        <div class="card">
                            <img src="<!-- ToDo -->" class="card-img-top" alt="<!-- ToDo -->">
                            <div class="card-body">
                                <label for="products[<!-- ToDo -->]" class="form-label">
                                    <!-- ToDo --> - <!-- ToDo --> €
                                </label>
                                <input type="number" class="form-control" id="products[<!-- ToDo -->]"
                                       name="products[<!-- ToDo -->]"
                                       value="<!-- ToDo -->" min="0">
                                <p>Kategorie: <!-- ToDo --></p>
                            </div>
                        </div>
                    </section>
                <!-- ToDo -->
            </div>
            <input type="hidden" name="add_to_cart" value="1">
            <button class="btn btn-outline-dark mt-3" type="submit">Absenden</button>
        </form>
    </article>
    <article>
        <h2>Warenkorb</h2>
        <!-- ToDo -->
            <p>Der Warenkorb ist leer.</p>
        <!-- ToDo -->
            <ul>
                <!-- ToDo -->
                    <li>
                        <img src="<!-- ToDo -->" alt="<!-- ToDo -->" width="50">
                        <!-- ToDo --> - <!-- ToDo --> €
                        (Anzahl: <!-- ToDo -->)
                    </li>
                <!-- ToDo -->
            </ul>
            <h3>Gesamtbetrag: <!-- ToDo --> €</h3>
        <!-- ToDo -->
    </article>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
