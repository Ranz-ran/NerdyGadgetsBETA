<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>filter</title>
    <link rel="stylesheet" href="../HetBestek/style.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../HetBestek/overzichtstyle.css">
</head>
<body>

<form action="" method="post">
    Zoeken: <input type="text" name="name"><br>
    <button onclick="search()">Search</button>
    <div id="searchResults"></div>
</form>

    <?php

    $connection = mysqli_connect(
            "localhost", "root", "", "nerdy_gadgets_start", "3306");
    $query = trim('');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $query = trim($_POST['query'])) {
        $sql = "select * from product where name like '%$query%'";
        //$sql = include "../HetBestek/overzicht.php";
    } else {
        $sql = header("../HetBestek/index.php");
        //$sql = "select * from persoon";
    }


    //$result = mysqli_query($connection, $sql);

    //while ($row = mysqli_fetch_assoc($result)) {
    //    echo $row['id'] . "";
    //}

    mysqli_close($connection);
    ?>

</body>
</html>