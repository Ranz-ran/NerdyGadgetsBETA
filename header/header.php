<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="loginbuttons.css">
    <link rel="stylesheet" href="header.css">
    <header>
        <?php
        session_start();
        include "../Algemeen/navigation menu.html"
        ?>
        <link rel="stylesheet" href="../Algemeen/Hamburgers.css">
        <div class="logo">
            <img src="../Img/IMG_1915.png" alt="Nerdy Gadgets Logo" class="logo">
        </div>
       <?php
        //include "../Andere/filter.php"
        ?>
        <div class="login-signin-button">
        <?php
        include "loginbuttons.php";
        ?>
        </div>
    </header>
</head>
<body>
</body>
</html>