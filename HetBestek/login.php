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
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <?php if (isset($zin)) { ?>
            <tr>
                <td colspan="2" align="center" valign="top"><?php print $zin; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
        </tr>
        <tr>
            <td align="right" valign="top">Email</td>
            <td><input name="email" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right">Wachtwoord</td>
            <td><input name="wachtwoord" type="password" class="Input"></td>
        </tr>
        <tr>
            <td></td>
            <td><input name="loginSubmit" type="submit" value="Login" class="Button"></td>
        </tr>
    </table>
</form>
</body>
</html>