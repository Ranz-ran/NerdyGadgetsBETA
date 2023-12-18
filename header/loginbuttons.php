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