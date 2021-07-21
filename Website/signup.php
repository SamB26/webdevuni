<?php
include_once "header.php";

?>
</header>
<div class="social_media">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
</div>
<div class="signupform">
    <form id="signupform" method="post" action="signupformhandler.php">
        <h1>Sign Up</h1>
        <input name="name" type="text" class="formcontrol" placeholder="Full name" required>
        <br>
        <input name="username" type="text" class="formcontrol" placeholder="Username" required>
        <br>
        <input name="email" type="text" class="formcontrol" placeholder="Email" required>
        <br>
        <input name="password" type="password" class="formcontrol" placeholder="Password" required>
        <br>
        <input name="passwordconf" type="password" class="formcontrol" placeholder="Confirm Password" required>
        <br>
        <input type="submit" class="btn2" value="Sign Up!">
    </form>
</div>
<footer class="footer">
    <p1>Est.2021<br>Gamer's Paradise Ltd</p1>
</footer>

</body>
</html>



