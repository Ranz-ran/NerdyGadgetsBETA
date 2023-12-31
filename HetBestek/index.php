<!DOCTYPE html>
<html lang="en">
<head>
    <!-- responsive code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- external links -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Algemeen/Hamburgers.css">
    <link rel="stylesheet" href="../header/header.css">

    <title>Nerdy Gadgets</title>
</head>

<div class="header">
    <?php
    include("../header/header.php");
    ?>
</div>

<body>
<!-- als je wil kan je hier bijvoorbeeld de slogan plakken -->
<div class="slogan">
    <h3>The gadgets that improve your modern day life. </h3>
</div>


<!-- aanbevolen producten slider -->
<div class="aanbevolen">
    <div class="slides">
        <?php
        include "../HetBestek/Carousel.html";
        ?>
    </div>
</div>



<p>Wij de makers van Nerdy Gadgets willen ervoor zorgen dat het leven makkelijker wordt gemaakt voor onze klanten.
    Niet alleen het makkelijk maken van iemands leven vinden wij belangrijk,
    maar ook de mensen met hobby’s en interesses die door onze Gadgets enthousiast worden.
    Wij wensen u veel plezier en enthousiasme op onze webwinkel!</p>
<div class="slide"><img src="../Img/nerdy gadgets.jpg" alt="Slide 1"></div>

<?php
include "../Info/info.html";
?>

<footer>
    <div class="social">
        <a href="...">
            <ion-icon name="logo-instagram"></ion-icon>
        </a>
        <a href="...">
            <ion-icon name="logo-twitter"></ion-icon>
        </a>
        <a href="...">
            <ion-icon name="logo-facebook"></ion-icon>
        </a>
    </div>
    <ul>
        <li><a href="../HetBestek/index.php">Home</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    <p class="copyright">J-STAR ©2023</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
