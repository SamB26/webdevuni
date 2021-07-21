<?php
    include_once "header.php";
?>
		<div class="contacttext">
			<h1>Contact us</h1>
			<h2><br>Fill out the form below and we will get back to you.</h2>
		</div>
		<div class="contactus">
			<div class="contactinfo">
				<h2>Our Contact Information:<h2>
				<div class="email">
					<p1>Email:<br>bh73qi@student.sunderland.ac.uk</p1>
				</div>
				<div class="tel">
					<p1>Telephone:<br>0192 8392 819</p1>
				</div>
			</div>
			<div class="contactform">
				<h2>Say Hello!</h2>
				<form id="contact" method="post" action="contactformhandler.php">
				<input name="name" type="text" class="formcontrol" placeholder="Your Name" required>
				<br>
				<input name="email" type="email" class="formcontrol" placeholder="Your Email" required>
				<br>
				<textarea name="message" class="formcontrol" placeholder="Message" row="4" required></textarea><br>
				<input type="submit" class="btn2" value="Send!">	
				</form>
			</div>
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









