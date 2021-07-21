<?php
include_once "header.php";
include "conn_to_db.php";
?>
<div class="gametitle">
    <h1>Xbox Games</h1>
</div>
<table class = "games">
    <tr>
        <th class="gameimg">Game</th>
        <th>Title</th>
        <th>Price</th>
        <th class="gameinfo">Info</th>
        <th>Buy Now</th>
    </tr>
    <?php

    $pricequery = $conn->prepare('SELECT prod_name, prod_price, prod_info, prod_id, prod_stock, prod_image FROM Assessment.Product WHERE prod_type= ?');
    $gamename = $_POST["prod_name"];
    $pricequery->execute(['xbox']);
    $result = $pricequery->fetchAll();
    foreach($result as $game):?>
        <tr>
            <td class = "gameimg"><img src="<?php echo($game["prod_image"])?>" alt="<?php echo($game["prod_name"])?>"></td>
            <td><?php echo($game["prod_name"])?></td>
            <td>
                <?php
                echo($game["prod_price"])
                ?>
            </td>
            <td class="gameinfo"><?php
                echo($game["prod_info"])
                ?></td>

            <td><a href="buygame.php?id=<?php echo ($game['prod_id']);?>" class="btn2">Buy</a></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
</header>
<footer class="footer">
    <p1>Est.2021<br>Gamer's Paradise Ltd</p1>
</footer>
<div class="extraspace">
    <p1>extraspace</p1>
</div>
</body>
</html>