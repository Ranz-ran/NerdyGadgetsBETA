<?php
include("../Database/connection.php");

$registratiezin = registreren();

// Bereken de page waar de knop is gedrukt
$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];

function registreren() {
    session_start();
    global $pdo;

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

            $stmt = $pdo->prepare("INSERT INTO User (first_name, surname, postal_code, email, password) VALUES (:firstName, :surname, :postalCode, :email, :wachtwoord)");
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':postalCode', $postalCode);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':wachtwoord', $hashedPassword);

            if ($stmt->execute()) { 
                $user_id = $pdo->lastInsertId();
                // session klaar zetten en bijhouden met naam en user's id
                $_SESSION['user_id'] = $user_id;
                $_SESSION['naam'] = $firstName;
                // deze return werkt als debug als het nodig is    
                return "<p>Registratie gelukt</p>";
                // Redirect naar de page waar de knop is gedrukt
                $redirect_url = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : 'login.php';
                header("Location: " . $redirect_url);
                exit();
            } else {
                return "<p>Er is iets mis gegaan</p>";
            }
        } else {
            if ($passwordRegister != $passwordConfirm) {
                return "<p>De gegeven wachtwoordvelden komen niet overeen.</p>";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="logsignin.css">
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>
<body>
<form action="" method="post" name="Register_Form">
    <table width="400" cellpadding="5" cellspacing="1" class="Table">
        <?php if (isset($registratiezin)) { ?>
            <tr>
                <td colspan="2" class="zin"><?php print $registratiezin; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td><h3>Register</h3></td>
        </tr>
        <tr>
            <td>Naam*</td>
            <td><input name="firstName" type="text" class="Input"></td>
        </tr>
        <tr>
            <td>Achternaam*</td>
            <td><input name="surname" type="text" class="Input"></td>
        </tr>
        <tr>
            <td>Postcode*</td>
            <td><input name="postalCode" type="text" class="Input"></td>
        </tr>
        <tr>
            <td>Email*</td>
            <td><input name="email" type="email" class="Input"></td>
        </tr>
        <tr>
            <td>Wachtwoord*</td>
            <td><input name="regPassword" type="password" class="Input"></td>
        </tr>
        <tr>
            <td>Herhaal wachtwoord*</td>
            <td><input name="confPassword" type="password" class="Input"></td>
        </tr>
        <tr>
            <td><a href="login.php" class="formLink">Heb je al een account?</a></td>
        </tr>
        <tr>
            <td><input name="registerSubmit" type="submit" value="Register" class="Button"></td>
            <td><input name="cancel" type="button" value="Cancel" class="cancel"></td>
        </tr>
    </table>
</form>
</body>
</html>
