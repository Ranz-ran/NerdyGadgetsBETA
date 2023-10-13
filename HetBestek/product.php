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
  <div class="foto"><img src="../Img/nerdy gadgets.jpg" alt="Gadget Afbeelding"></div>
  <div class="omschrijving">
    <p></p>
  </div>

</body>
<?php include "./footer.php" ?>
</html>