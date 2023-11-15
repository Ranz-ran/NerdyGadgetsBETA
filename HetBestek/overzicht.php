<?php
include("./header.php");
//include "./legend.php";
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

  <?php
  include("connection.php");

  //verkrijg alle producten van de database
  $stmt = $pdo->query("SELECT *
                        FROM Product");
  $gadgets = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // zolang er producten zijn, print de product gegevens
  if (count($gadgets) > 0) {
    foreach ($gadgets as $gadget) {
      $gadgetId = $gadget['id'];
      print('<a href="product.php?gadget_id=' . $gadgetId . '">');
      print('<div class="gadget">');
      print('<img src="$gadget["image"]" alt="">');
      print('<div class="details">');
      print('<p>'.$gadget['name'].'</p>');
      print('<p>'.$gadget['description'].'</p>');
      print('<p>'.$gadget['resentie'].'</p>');
      print('<p>'.$gadget['catagory'].'</p>');
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

</body>
<?php include("./footer.php") ?>
</html>