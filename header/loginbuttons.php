<link rel="stylesheet" href="../header/loginbuttons.css">
<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $firstName = $_SESSION['naam'];
    print("<p>".$firstName."</p>");
    print("<a href='../HetBestek/logout.php' class='login-button'>Sign Out</a>");
} else {
    print("<a href='../HetBestek/login.php' class='login-button'>Login</a>");    
    print("<a href='../HetBestek/signin.php' class='login-button'>Sign In</a>");  
}
?>