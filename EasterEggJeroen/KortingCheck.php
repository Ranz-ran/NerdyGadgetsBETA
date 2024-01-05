<?php
$Korting=0;
if (isset($_POST)) {
    if ($_POST["Vraag1"] == "Pinguin") {
        $Korting++;
    }
    if ($_POST["Vraag2"] == 1822) {
        $Korting++;
    }

    if (($_POST["Kleur1"] == "Zwart" or $_POST["Kleur1"] == "Geel" or $_POST["Kleur1"] == "Grijs") and ($_POST["Kleur2"] == "Zwart" or $_POST["Kleur2"] == "Geel" or $_POST["Kleur2"] == "Grijs") and ($_POST["Kleur3"] == "Zwart" or $_POST["Kleur3"] == "Geel" or $_POST["Kleur3"] == "Grijs")) {
        if (strcmp($_POST["Kleur1"], $_POST["Kleur2"]) and strcmp($_POST["Kleur2"], $_POST["Kleur3"]) and strcmp($_POST["Kleur1"], $_POST["Kleur3"])) {
            $Korting++;
        }
    }

    $Korting = $Korting * 5;
    print("Uw korting is $Korting %");
}
?>