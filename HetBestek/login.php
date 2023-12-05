<?php

include("../header/header.php");

$zin = inloggen();

function inloggen() {
    session_start();
    if (isset($_POST['Submit'])) {
        $usernameLogin = isset($_POST['username']) ? $_POST['username'] : "";
        if (isset($_POST['wachtwoord'])){
            $wachtwoord =$_POST['wachtwoord'] ;
        }

        global $conn;
        if ($usernameLogin != "" && $wachtwoord != ""){
            $query = "select * from  where username='".$usernameLogin."' and ='".$wachtwoord."'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $resultaat = $stmt->fetch();

        } else {
            return "<p>Vul alles in</p>";
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
        <?php if(isset($zin)){?>
            <tr>
                <td colspan="2" align="center" valign="top"><?php print $zin;?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
        </tr>
        <tr>
            <td align="right" valign="top">Username</td>
            <td><input name="username" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right">Wachtwoord</td>
            <td><input name="wachtwoord" type="password" class="Input"></td>
        </tr>
        <tr>
            <td></td>
            <td><input name="Submit" type="submit" value="Login" class="Button"></td>
        </tr>
    </table>
</form>
</body>
</html>