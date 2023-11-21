<?php
// dit is de winkelwagen
session_start();
include("../Database/connection.php");

// Functie in winkelwagen doen
function addToCart($productId, $aantal) {
    global $conn;

    // verkrijg het juiste product uit de database
    $sql = "SELECT * FROM  WHERE id = :productId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
    $stmt->execute();

    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // voeg het item toe
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $item = array(
        'id' => $product['id'],
        'naam' => $product['naam'],
        'prijs' => $product['prijs'],
        'aantal' => $aantal
    );

    array_push($_SESSION['cart'], $item);
}

// Functie bereken totale prijs
function getTotalPrice() {
    $totaalPrijs = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $totaalPrijs += $item['prijs'] * $item['aantal'];
        }
    }

    return $totaalPrijs;
}

// Functie die de checkout regelt uiteindelijk
function saveOrder() {
    global $conn;

    // voeg de bestelling toe
    $sql = "INSERT INTO  () VALUES (:totaalPrijs)";
    $stmt = $conn->prepare($sql);
    $totalPrice = getTotalPrice();
    $stmt->bindParam(':totaalPrijs', $totalPrice, PDO::PARAM_INT);
    $stmt->execute();
    $orderId = $conn->lastInsertId();

    // voeg de items aan de bestelling toe
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $productId = $item['id'];
            $aantal = $item['aantal'];

            $sql = "INSERT INTO  () VALUES (:orderId, :productId, :aantal)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':orderId', $orderId, PDO::PARAM_INT);
            $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
            $stmt->bindParam(':aantal', $aantal, PDO::PARAM_INT);
            $stmt->execute();
        }
    }

    // Clear cart
    unset($_SESSION['cart']);
}
?>