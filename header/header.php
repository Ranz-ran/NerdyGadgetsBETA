<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

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
        include "../Andere/filter.html"
        ?>
        <div class="login-signin-button">
            <?php
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];
                    //enter hier iets voor als de user is ingelogd
                } else {
                print("<a href='login.php' class='Button'>Login</a>");    
                print("<a href='signin.php' class='Button'>Sign In</a>");  
                }    
            ?>
            <a href="login.php" class="Button">Login</a>
            <a href="signin.php" class="Button">Sign In</a>
        </div>
    </header>
</head>


<body>
</body>
</html>