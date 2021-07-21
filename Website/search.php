<?php
include_once "header.php";

?>
</header>
<!--social media icons-->
<div class="social_media">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
</div>
<div class="loginform"><!--search form-->
    <form id="loginform" method="get" action="searchhandler.php">
        <h1>Search</h1>
        <input name="search" type="text" class="formcontrol" placeholder="Search for a game..." required>
        <br>
        <!--search button sends info to searchhandler.php-->
        <input type="submit" class="btn2" value="Search!">
    </form>
</div>
<!--footer to be shown at bottom of page-->
<footer class="footer">
    <p1>Est.2021<br>Gamer's Paradise Ltd</p1>
</footer>
</body>
</html>



