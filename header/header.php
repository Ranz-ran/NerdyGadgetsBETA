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
        //include "../Andere/filter.php"
        ?>
        <div class="login-signin-button">
            <?php
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];
                    $firstName = $_SESSION['naam'];
                    print("<p>".$firstName."</p>");
                    print("<a href='../HetBestek/logout.php' class='Button'>Sign Out</a>");
                } else {
                    print("<a href='../HetBestek/login.php' class='Button'>Login</a>");    
                    print("<a href='../HetBestek/signin.php' class='Button'>Sign In</a>");  
                }    
            ?>
        </div>
    </header>
</head>


<body>
</body>
</html>