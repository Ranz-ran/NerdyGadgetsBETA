<!DOCTYPE html>
<html lang="en">
<div class="header">
    <?php
    include("../header/header.php");
    ?>
</div>

<head>
    <meta charset="UTF-8">
    <title>Geheime korting</title>
</head>
<body>
<h1> Gefelliteerd! U heeft de geheime kortingscode gevonden!</h1>
<img src="../Img/Nemo_dagboek.jpg" style=" width: 300px; height: 300px; object-fit: contain; position: relative; top: 50%; width: 100%;">
<p> wat u nu nog te doen staat is om het volgende raadsels op te lossen. Voor elk goed antwoord krijgt u 5% korting</p>

<form method="post" action="KortingResultaat.php">
    <h4>Welk dier word er afgebeeld op het linux logo?</h4>
<input type="text" name="Vraag1">
    <h4>In welk jaar werd de eerste computer gebouwd? </h4>
<input type="number" name="Vraag2">
    <h4>Welke kleuren zitten in ons logo? 1 kleur per invoerveld aub</h4>
    <input type="text" name="Kleur1">
    <input type="text" name="Kleur2">
    <input type="text" name="Kleur3">
    <INPUT TYPE="submit" NAME="verzendknop" VALUE="Verzend">
</form>
</body>

</html>