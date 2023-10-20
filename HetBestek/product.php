<?php
include "./header.php";
// include("connection.php");

// Verkrijg een gadget Id van de URL
// if (isset($_GET['gadget_id'])) {
//   $gadgetId = $_GET['gadget_id'];
// } else {
  // als die er niet is, redirect user
//   header("location: index.php");
//   exit;
//}

// Verkrijg de juiste gadget met deze query
// $stmt = $pdo->prepare("SELECT 
// FROM 
// JOIN  ON  = 
// WHERE  = ?");
// $stmt->execute([$gadgetId]);
// $gadget = $stmt->fetch(PDO::FETCH_ASSOC);


// Als er geen gadget is om te tonen, redirect de gebruiker naar de geselecteerde pagina
// if (!$gadget) {
//   header("location: ");
//   exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- responsive code -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- external links -->
  <link rel="stylesheet" href="style.css">
  <title>Nerdy Gadgets</title>
</head>
<body>
  <div class="foto"><img src="../Img/product_images/Intel Core i7.jpg" alt="Gadget Afbeelding"></div>
  <div class="hoofd-info">
    <h2>TITLE</h2>
    <p>&#11088; &#11088; &#11088; &#11088; &#11088;</p>
  </div>
  <div class="omschrijving">
    <p>Lorem ipsum dolor sit amet. Et nobis amet ea distinctio dicta et ducimus saepe.
      Et dolorum voluptate et iste commodi ut explicabo galisum ab nulla dolores et
      accusamus aliquam est perferendis asperiores. Aut tempora autem ut eius dicta
      sit velit dicta qui fugit laborum.</p>
  </div>
  <div class="aankoop">
    <span class="prijs"> € 0,00 </span>
    <div class="koop-nu"> In Winkelwagen </div>
  </div>
  <div class="resenties">
    <?php include "./.html" ?>
  </div>

</body>
<?php include "./footer.php" ?>
</html>