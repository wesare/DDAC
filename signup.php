<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up</h2>
		<form class="signup-form" action="includes/signup-inc.php" method="POST">
			<input type="text" name="namefirst" placeholder="Firstname">
			<input type="text" name="namelast" placeholder="Lasttname">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>