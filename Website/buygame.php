<?php
include_once "header.php";
include "conn_to_db.php";
$gameid = $_GET["id"];
?>
<div class="gametitle">
    <h1>Please Confirm your purchase <?php echo $_SESSION['cust_username']?> :</h1>
</div>
<div class="buybuttons">
    <div class="button">
        <div class="buybutton1">
            <a href="buygamehandler.php?id=<?php echo $gameid;?>" class="btn2">Buy</a>
        </div>
        <div class="buybutton2">
            <a href="home.php" class="btn2">Cancel</a>
        </div>
    </div>
</div>
<table class = "games">
    <tr>
        <th class="gameimg">Game</th>
        <th>Title</th>
        <th>Price</th>
        <th class="gameinfo">Info</th>

    </tr>
    <?php
    $gameid = $_GET["id"];
    $query = $conn->prepare('SELECT prod_name, prod_price, prod_info, prod_stock, prod_image FROM Assessment.Product WHERE prod_id= '.$gameid.'');
    $query->execute();
    $result = $query->fetchAll();
    foreach($result as $game):?>
        <tr>
            <td class = "gameimg"><img src="<?php echo($game["prod_image"])?>" alt="<?php echo($game["prod_name"])?>"></td>
            <td><?php echo($game["prod_name"])?></td>
            <td><?php echo($game["prod_price"])?></td>
            <td class="gameinfo"><?php echo($game["prod_info"])?></td>

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