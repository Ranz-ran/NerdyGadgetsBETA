<?php
include("../Database/connection.php");

$zin = inloggen();

function inloggen() {
    session_start();
    global $pdo;

    if (isset($_POST['loginSubmit'])) {
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $wachtwoord = isset($_POST['wachtwoord']) ? $_POST['wachtwoord'] : "";

        if ($email != "" && $wachtwoord != "") {
            $query = "SELECT * FROM User WHERE email = :email";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $resultaat = $stmt->fetch();

            if ($resultaat && password_verify($wachtwoord, $resultaat['password'])) {
                // session klaar zetten en bijhouden met naam en user's id
                $_SESSION['user_id'] = $resultaat['id'];
                $_SESSION['naam'] = $resultaat['first_name'];
                // deze return werkt als debug als het nodig is
                return "<p>Login successful, welkom " . $_SESSION['naam'] . ".</p>";
            } else {
                return "<p>Login mislukt, ongeldig email of wachtwoord</p>";
            }
        } else {
            return "<p>Vul alle velden in</p>";
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
    <title>Login</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <table width="400" cellpadding="5" cellspacing="1" class="Table">
        <?php if (isset($zin)) { ?>
            <tr>
                <td colspan="2" class="zin"><?php print $zin; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td><h3>Login</h3></td>
            <td></td>
        </tr>
        <tr>
            <td>Email*</td>
            <td><input name="email" type="text" class="Input"></td>
        </tr>
        <tr>
            <td>Wachtwoord*</td>
            <td><input name="wachtwoord" type="password" class="Input"></td>
        </tr>
        <tr>
            <td><a href="signin.php" class="formLink">Nog geen account?</a></td>
        </tr>
        <tr>
            <td><input name="loginSubmit" type="submit" value="Login" class="Button"></td>
            <td><input name="cancel" type="button" value="Cancel" class="cancel"></td>
        </tr>
    </table>
</form>
</body>
</html>