<?php
include("../Database/connection.php");
// include("../legend.php");

// Verkrijg een gadget Id van de URL
if (isset($_GET['gadget_id'])) {
  $gadgetId = $_GET['gadget_id'];
} else {
  //als die er niet is, redirect user
  header("location: index.php");
  exit;
}

//Verkrijg de juiste gadget met deze query
$stmt = $pdo->prepare("SELECT name, description, price, category, image
FROM Product
WHERE id = ?");
$stmt->execute([$gadgetId]);
$gadget = $stmt->fetch(PDO::FETCH_ASSOC);


//Als er geen gadget is om te tonen, redirect de gebruiker naar de geselecteerde pagina
if (!$gadget) {
  header("location: overzicht.php");
  exit;
}

//Check of de koop nu knop is ingedrukt, zo ja? voeg toe aan winkelwagen
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['in_winkelwagen'])) {
  $gadgetCartId = $gadgetId;
  $gadgetCartNaam = $gadget['name']; 
  $gadgetCartId = $gadget['price'];

  addToCart($gadgetCartId, $gadgetCartNaam, $gadgetCartId);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- responsive code -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- external links -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="productstyle.css">
  <link rel="stylesheet" href="../Algemeen/Hamburgers.css">
  <link rel="stylesheet" href="../header/header.css">
  <title>Nerdy Gadgets</title>
</head>

<body>
  <div class="header">
    <?php
    include("../header/header.php");
    ?>
  </div>

  <div class="foto">
    <?php
      print("<img src='../Img/product_images/".$gadget["image"]."' alt='Gadget Afbeelding'>");
    ?>
  </div>
  <div class="info">
    <div class="hoofd-info">
      <?php print("<h2>".$gadget["name"]."</h2>"); ?>
    </div>
    <div class="omschrijving">
      <?php print("<p>".$gadget["description"]."</p>"); ?>
    </div>
    <div class="aankoop">
      <?php print("<span class='prijs'> € ".$gadget["price"]." </span>"); ?>
    
      <form method="post">
        <input type="hidden" name="in_winkelwagen" value="1">
        <button type="submit" class="koop-nu"> In Winkelwagen </button>
      </form>
    </div>
    <div class="meer-producten">
      <?php //include("uw bestand hier aub"); ?>
    </div>
    <div class="resenties">
      <?php 
        include("../Feedback/Feedback_formulier.html")
      ?>
    </div>
  </div>

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
        <li><a href="../index.php">Home</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    <p class="copyright">J-STAR ©2023</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>