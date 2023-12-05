<?php
include("../header/header.php");

$registratiezin = registreren();

function registreren() {
    session_start();
    global $conn;

    if (isset($_POST['registerSubmit'])) {
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
        $surname = isset($_POST['surname']) ? $_POST['surname'] : "";
        $postalCode = isset($_POST['postalCode']) ? $_POST['postalCode'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $passwordRegister = isset($_POST['regPassword']) ? $_POST['regPassword'] : "";
        $passwordConfirm = isset($_POST['confPassword']) ? $_POST['confPassword'] : "";

        if (($firstName != "" && $surname != "" && $postalCode != "" && $email != "" && $passwordRegister != "") && $passwordRegister == $passwordConfirm) {
            // hash het wachtwoord voor veiligheidsredenen
            $hashedPassword = password_hash($passwordRegister, PASSWORD_DEFAULT);

            $query = "INSERT INTO User (first_name, surname, postal_code, email, password) VALUES (:firstName, :surname, :postalCode, :email, :password)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':postalCode', $postalCode);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            if ($stmt->execute()) {
                return "<p>Registratie gelukt</p>";
            } else {
                return "<p>Er is iets mis gegaan</p>";
            }
        } else {
            if ($passwordRegister != $passwordConfirm) {
                return "<p>Er is een typfout in uw wachtwoord</p>";
            } else {
                return "<p>Voer alle velden in</p>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
<form action="" method="post" name="Register_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <?php if (isset($registratiezin)) { ?>
            <tr>
                <td colspan="2" align="center" valign="top"><?php print $registratiezin; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2" align="left" valign="top"><h3>Register</h3></td>
        </tr>
        <tr>
            <td align="right" valign="top">Naam</td>
            <td><input name="firstName" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right" valign="top">Achternaam</td>
            <td><input name="surname" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right" valign="top">Postcode</td>
            <td><input name="postalCode" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right" valign="top">Email</td>
            <td><input name="email" type="email" class="Input"></td>
        </tr>
        <tr>
            <td align="right">Wachtwoord</td>
            <td><input name="regPassword" type="password" class="Input"></td>
        </tr>
        <tr>
            <td align="right">Herhaal wachtwoord</td>
            <td><input name="confPassword" type="password" class="Input"></td>
        </tr>
        <tr>
            <td></td>
            <td><input name="registerSubmit" type="submit" value="Register" class="Button"></td>
        </tr>
    </table>
</form>
</body>
</html>
