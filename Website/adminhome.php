<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
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
    <div class="intro">
        <h1>Hello Admin</h1>
    </div>
    <div class="button">
        <a href="custinfo.php" class="btn">Customer Info</a>
        <a href="stockinfo.php" class="btn">Stock Info</a>
    </div>

</header>
<div class="social_media">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
</div>
<footer class="footer">
    <p1>Est.2021<br>Gamer's Paradise Ltd</p1>
</footer>
</body>
</html>