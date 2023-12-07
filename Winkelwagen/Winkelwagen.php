<!DOCTYPE html>
<html lang="en">
<head>
    <!-- responsive code -->
    <title>Winkelwagen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../header/header.css">
        <?php
        include"../header/header.php"
        ;?>
<link rel="stylesheet" href="Winkelwagen.css">
</head>
<body>
<div class="wrap">
    <h2 class="projTitle">Welkom<span> bij </span> uw winkelwagen</h2>
    <div class="heading">
        <h2>Inhoud van de winkelwagen:</h2>
        <a href="../HetBestek/overzicht.php" class="continue">Verder Winkelen</a>
    </div>
</div>
<div class="containerr">
    <div class="cart">
        <div class="products">
            <div class="product">
                <img src="../Img/product_images/4GPNDDRJp92J.jpg">
                <div class="product-info">
                    <h3 class="product-name">Laptop</h3>
                    <h4 class="product-price">1,000</h4>
                    <p class="product-quantity">Aantal: <input type="number" placeholder="1">
                    <p class="product-remove">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        <span class="remove">Remove</span>
                    </p>
                </div>
            </div>
            <div class="product">
                <img src="../Img/product_images/50GWOQE58kZq.jpg">
                <div class="product-info">
                    <h3 class="product-name">Iphone</h3>
                    <h4 class="product-price">2,000</h4>
                    <p class="product-quantity">Aantal: <input type="number" placeholder="1">
                    <p class="product-remove">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        <span class="remove">Remove</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="cart-total">
            <p>
                <span>Totaal bedrag</span>
                <span> 3,000</span>
            </p>
            <p>
                <span>Aantal producten</span>
                <span>2</span>
            </p>
            <p>
            </p>
            <a href="#">Betalen</a>
        </div>
    </div>
</div>
</body>
</html>