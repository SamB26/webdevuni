<?php
include "conn_to_db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gamer’s Paradise</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<header>
    <div class="main">
        <input type="checkbox" id="check">
        <div class="button1">
            <label for="check">
                <i class="fa fa-bars"></i>
            </label>
        </div>

        <div class="logo">
            <img src="logo.png">
        </div>
        <ul>
            <li><a href=adminhome.php>Home</a></li>
            <li>Admin View</li>
        </ul>

        <div class="sidebox">
            <div class="sidebar">
                <h1>Shop</h1>
                <div class="button2">
                    <label for="check">
                        <i class="fas fa-times"></i>
                    </label>
                </div>
                <ul>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="xbox.php">Xbox</a></li>
                    <li><a href="playstation.php">PlayStation</a></li>
                    <li><a href="switch.php">Nintendo Switch</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gametitle">
        <h1>Stock info</h1>
    </div>
    <table class = "games">
        <tr>
            <th>Product ID</th>
            <th class="gameimg">Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php

        $custquery = $conn->prepare('SELECT prod_name, prod_price, prod_info, prod_id, prod_stock, prod_image FROM Assessment.Product');
        $custquery->execute();
        $result = $custquery->fetchAll();
        foreach($result as $game):?>
            <tr>
                <td><?php echo($game["prod_id"])?></td>
                <td class = "gameimg"><img src="<?php echo($game["prod_image"])?>" alt="<?php echo($game["prod_name"])?>"></td>
                <td><?php echo($game["prod_name"])?></td>
                <td><?php echo($game["prod_price"])?></td>
                <td><?php echo($game["prod_stock"]) ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</header>
<footer class="footer">
    <p1>Est.2021<br>Gamer's Paradise Ltd</p1>
</footer>

</body>
</html>