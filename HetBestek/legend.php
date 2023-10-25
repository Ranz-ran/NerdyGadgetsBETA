<?php
//Dit is het winkelwagen script als dat nog niet duidelijk was.
session_start();

// functie toevoegen aan cart
function addToCart($gadgetCartId, $gadgetCartNaam, $$gadgetCartPrijs) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $item = array(
        'id' => $gadgetCartId,
        'name' => $gadgetCartNaam,
        'price' => $gadgetCartPrijs
    );

    array_push($_SESSION['cart'], $item);
}

// Functie reken totale prijs uit
function getTotalPrice() {
    $totaalPrijs = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $totaalPrijs += $item['price'];
        }
    }

    return $totaalPrijs;
}
?>