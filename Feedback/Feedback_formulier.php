<?php
global $pdo;
include("../Database/connection.php");


// Verwerk het formulier als het is ingediend
if (isset($_POST['submit'])) {
  // Haal de waarden van het formulier op
  $stars = $_POST['stars'];
  $review = $_POST['review'];
  $username = $_POST['username'];

  // Controleer of de gebruikersnaam is ingevoerd of niet
  if (empty($username)) {
    // Gebruik een standaardwaarde als de gebruikersnaam leeg is
    $username = "Anoniem";
  }

  // Maak de query om de gegevens in te voegen
  $sql = "INSERT INTO rating (stars, review, username, date) VALUES ('$stars', '$review', '$username', NOW())";

  // Voer de query uit
  if (mysqli_query($pdo , $sql)) {
    echo "Bedankt voor uw feedback!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($pdo );
}
}
?>

<html>
<head>
    <style>
        /* Stijl voor de sterren */
        .star {
            font-size: 30px;
            color: gold;
        }
    </style>
</head>
<body>
<h1>Sterretjes rating systeem</h1>
<p>Geef uw mening over onze website en laat een recensie achter.</p>
<form action="" method="post">
    <p>Kies het aantal sterren:</p>
    <select name="stars" multiple>
        <option value="1">1 ster</option>
        <option value="2">2 sterren</option>
        <option value="3">3 sterren</option>
        <option value="4">4 sterren</option>
        <option value="5">5 sterren</option>
    </select>
    <p>Schrijf uw recensie:</p>
    <textarea name="review" rows="5" cols="40" required></textarea>
    <p>Voer uw gebruikersnaam in (optioneel):</p>
    <input type="text" name="username" placeholder="Anoniem">
    <p><input type="submit" name="submit" value="Verstuur"></p>
</form>
<hr>
<h2>Recensies</h2>
<?php
  // Maak de query om de gegevens te selecteren
 // $sql = "SELECT stars, review, username, date FROM rating ORDER BY date DESC";

  // Voer de query uit
 // $result = mysqli_query($pdo , $sql);

$stmt = $pdo->query("SELECT stars, review, username, date FROM rating ORDER BY date DESC");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Controleer of er resultaten zijn
  if (mysqli_num_rows($result) > 0) {
// Ga door de rijen van de resultaatset
while($row = mysqli_fetch_assoc($result)) {
// Toon de sterren, de recensie, de gebruikersnaam en de datum
echo "<p>";
    for ($i = 0; $i < $row['stars']; $i++) {
    // Gebruik het unicode symbool voor een ster
    echo "<span class=\"star\">★</span>";
    }
    echo "<br>";
    echo $row['review'];
    echo "<br>";
    echo "Door: " . $row['username'];
    echo "<br>";
    echo "Op: " . $row['date'];
    echo "</p>";
}
} else {
// Toon een bericht als er geen recensies zijn
echo "<p>Er zijn nog geen recensies. Wees de eerste om uw mening te geven!</p>";
}

// Sluit de verbinding
mysqli_close($pdo );
?>
</body>
</html>
