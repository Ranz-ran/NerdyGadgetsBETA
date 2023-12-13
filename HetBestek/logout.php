<?php
session_start();

// Bereken de page waar de knop is gedrukt
$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];

// Leeg de session
$_SESSION = array();

// Eindig de huidige session
session_destroy();

// Redirect naar de page waar de knop is gedrukt
$redirect_url = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : 'login.php';
header("Location: " . $redirect_url);
exit();
?>
