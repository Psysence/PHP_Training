<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>Skroutz</title>
	<link rel="stylesheet" href="Askisi1Styles.css">
	<?php
		session_start();
	?>
</head>

<body>
	<header>
		<nav>
			<h1>SKROUTZ</h1>
			<ul>
				<li><a href='index.php'>Αρχική</a></li>
				<li><a href='?p=Selections/shopinfo.html'>Το Κατάστημά μας</a></li>
				<li><a href='?p=Selections/products.html'>Τα προϊόντα μας</a></li>
				<li><a href="#">Καλάθι Αγορών</a></li>
				<li><a href='?p=Selections/login.php'>Σύνδεση Πελατών</a></li>
				<li><a href='?p=Selections/contact.html'>Επικοινωνία</a></li>
			</ul>
		</nav>
	</header>
	<div id="div1">
		<?php
			if(isset($_SESSION['name']))
			{
				echo "USER: $_SESSION[name]";
				echo "<ul>";
				echo "<li><a href='?p=Selections/login.php'>Zdarova</a></li>";
				echo "<li><a href='?p=logout'>Log Out</a></li>";
				echo '</ul>';
			}?>
	</div>
	<div id="div2">
		<?php
			if(!isset($_REQUEST['p']))
				require "Selections/home.html";

			if(isset($_REQUEST['p']) && $_REQUEST['p'] != 'logout')
			{
				require $_REQUEST['p'];
			}
			if($_REQUEST['p'] == 'logout')
			{
				session_start();
				session_destroy();
				header('Location: index.php');
			}				
		?>
	</div>
	<footer>FOOTER</footer>

</body>

</html>
