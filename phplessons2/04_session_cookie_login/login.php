<html>
	<head></head>
	
	<body>

		<?php include "tmpl_loginForm.php"; ?>
		
		<h1>Սկզբնական էջ</h1>
		<ul>
			<li><a href="">Սկիզբ</a></li>
			<li><a href="other_page.php">Այլ</a></li>

		</ul>

		<?php if($loggedIn): ?>
			
			<form>
				<textarea></textarea>
			</form>
		<?php endif; ?>			
		<?php
			//echo session_save_path();
			//phpinfo();

		 ?>
	</body>
</html>