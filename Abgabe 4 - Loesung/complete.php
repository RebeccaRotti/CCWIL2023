
<?php
// Produkte und Preise mit Bildern und Kategorien vorgegeben
$products = array(
    "product1" => array("name" => "Produkt 1", "price" => 10, "category" => "Kategorie A", "image" => "https://unsplash.it/600/400"),
    "product2" => array("name" => "Produkt 2", "price" => 15, "category" => "Kategorie B", "image" => "https://unsplash.it/600/400"),
    "product3" => array("name" => "Produkt 3", "price" => 20, "category" => "Kategorie A", "image" => "https://unsplash.it/600/400"),
    "product4" => array("name" => "Produkt 4", "price" => 25, "category" => "Kategorie C", "image" => "https://unsplash.it/600/400"),
    "product5" => array("name" => "Produkt 5", "price" => 30, "category" => "Kategorie B", "image" => "https://unsplash.it/600/400")
);

// Warenkorb als Array
$cart = array();

// Hinzufügen von Produkten zum Warenkorb
if (isset($_POST['add_to_cart'])) {

    foreach ($_POST['products'] as $product_id => $quantity) {
        if (isset($products[$product_id]) && is_numeric($quantity) && $quantity > 0) {
            // Prüfen, ob das Produkt bereits im Warenkorb ist
            if (isset($cart[$product_id])) {
                // Wenn das Produkt bereits im Warenkorb ist, erhöhen Sie die Menge
                $cart[$product_id]['quantity'] += $quantity;
            } else {
                // Wenn das Produkt nicht im Warenkorb ist, fügen Sie es hinzu
                $cart[$product_id] = array(
                    'name' => $products[$product_id]['name'],
                    'price' => $products[$product_id]['price'],
                    'quantity' => $quantity,
                    'category' => $products[$product_id]['category'],
                    'image' => $products[$product_id]['image']
                );
            }
        }
    }
}

// Gesamtbetrag berechnen
$total = 0;
foreach ($cart as $product_id => $product_data) {
    $total += $product_data['price'] * $product_data['quantity'];
}

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
                <?php foreach ($products as $product_id => $product) : ?>
                    <section class="col">
                        <div class="card">
                            <img src="<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['name']; ?>">
                            <div class="card-body">
                                <label for="products[<?php echo $product_id; ?>]" class="form-label">
                                    <?php echo $product['name']; ?> - <?php echo $product['price']; ?> €
                                </label>
                                <input type="number" class="form-control" id="products[<?php echo $product_id; ?>]"
                                       name="products[<?php echo $product_id; ?>]"
                                       value="<?= $cart[$product_id]['quantity'] ?? 0; ?>" min="0">
                                <p>Kategorie: <?= $product['category']; ?></p>
                            </div>
                        </div>
                    </section>
                <?php endforeach; ?>
            </div>
            <input type="hidden" name="add_to_cart" value="1">
            <button class="btn btn-outline-dark mt-3" type="submit">Absenden</button>
        </form>
    </article>
    <article>
        <h2>Warenkorb</h2>
        <?php if (empty($cart)) : ?>
            <p>Der Warenkorb ist leer.</p>
        <?php else : ?>
            <ul>
                <?php foreach ($cart as $product_id => $product_data) : ?>
                    <li>
                        <img src="<?= $product_data['image']; ?>" alt="<?= $product_data['name']; ?>" width="50">
                        <?php echo $product_data['name']; ?> - <?php echo $product_data['price']; ?> €
                        (Anzahl: <?php echo $product_data['quantity']; ?>)
                    </li>
                <?php endforeach; ?>
            </ul>
            <h3>Gesamtbetrag: <?php echo $total; ?> €</h3>
        <?php endif; ?>
    </article>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
