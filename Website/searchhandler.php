<?php
//repeated html and database connection
include_once "header.php";
include "conn_to_db.php";
?>
<div class="gametitle">
    <h1>Search Results:</h1>
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
    //search function
    $search = $_GET['search'];
    $stmt = 'SELECT * FROM Assessment.Product WHERE prod_name LIKE :searchinput OR prod_type LIKE :searchinput OR prod_info LIKE :searchinput';
    $prod_search =$conn->prepare($stmt);
    $prod_search->bindValue(':searchinput','%'.$search.'%');
    $prod_search->execute();
    $result = $prod_search->fetchAll(); //returns all values
    foreach($result as $game):?> <!--prints all games-->
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

        <td><a href="buygame.php" class="btn2">Buy</a></td>
    </tr>
<?php
endforeach; //ends printing of all games
?>
</table>
</header>
<!--footer to be shown at bottom of page-->
<footer class="footer">
    <p1>Est.2021<br>Gamer's Paradise Ltd</p1>
</footer>

</body>
</html>