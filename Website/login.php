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
	<div class="loginform">
		<form id="loginform" method="post" action="loginformhandler.php">
			<h1>Log In Customer</h1>
			<input name="username" type="text" class="formcontrol" placeholder="Username" required>
			<br>
			<input name="password" type="password" class="formcontrol" placeholder="Password" required>
			<br>
			<input type="submit" class="btn2" value="Log In!">	
		</form>
		<form id="loginformadmin" method="post" action="loginformhandleradmin.php">
			<h1>Log In Admin</h1>
			<input name="username" type="text" class="formcontrol" placeholder="Username" required>
			<br>
			<input name="password" type="password" class="formcontrol" placeholder="Password" required>
			<br>
			<input type="submit" name="submit" class="btn2" value="Log In!">
		</form>
	</div>
	<footer class="footer">
		<p1>Est.2021<br>Gamer's Paradise Ltd</p1>
	</footer>
	
</body>
</html>



