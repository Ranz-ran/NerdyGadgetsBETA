<!DOCTYPE html>
<html lang="en">
<head>
  <!-- responsive code -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- external links -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="overzichtstyle.css">
  <link rel="stylesheet" href="../Algemeen/Hamburgers.css">
  <link rel="stylesheet" href="../header/header.css">
  <title>Nerdy Gadgets</title>
</head>
<body>

  <?php
  include("../header/header.php");
  include("../Database/connection.php");

  //verkrijg alle producten van de database
  $stmt = $pdo->query("SELECT *
                        FROM Product");
  $gadgets = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // zolang er producten zijn, print de product gegevens
  if (count($gadgets) > 0) {
    foreach ($gadgets as $gadget) {
      $gadgetId = $gadget['id'];
      print('<a class="gadget-box" href="product.php?gadget_id=' . $gadgetId . '">');
      print('<div class="gadget">');
      print('<img src="../Img/product_images/'.$gadget["image"].'.jpg" alt="Gadget Afbeelding">');
      print('<div class="details">');
      print('<p>'.$gadget['name'].'</p>');

      $limitedDescription = substr($gadget['description'], 0, 100);
      print('<p>'.$limitedDescription.'...</p>');

      // print('<p>'.$gadget['resentie'].'</p>');
      print('<p>'.$gadget['category'].'</p>');
      print('<p>'.$gadget['price'].'</p>');
      print('</div>');
      print('</div>');
      print('</a>');
    }


  } 
  // als er geen producten beschikbaar zijn (door bijvoorbeeld een error), geef een error message
  else {
    print('<div class="error-details">');
    print('<p class="error message">Er zijn op dit moment geen NerdyGadgets™ beschikbaar</p>');
    print('</div>');
  }
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
        <li><a href="../index.php">Home</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    <p class="copyright">J-STAR ©2023</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>