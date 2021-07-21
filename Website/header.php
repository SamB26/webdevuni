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
            <li><a href=home.php>Home</a></li>
            <li><a href=about.php>About</a></li>
            <li><a href=contact.php>Contact</a></li>
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