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

    //if ($_SERVER['REQUEST_METHOD'] === 'POST' && $query = trim($_POST['query'])) {
    //    $sql = "select * from product where name like '%$query%'";
    //    $sql = include "../HetBestek/overzicht.php";
    //} else {
    //    $sql = "select * from product";
    //    $sql = include "../HetBestek/index.php";
    //}


    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td>\n";
    }

    mysqli_close($connection);
    ?>
</table>
</body>
</html>