<!DOCTYPE html>
<html>
<head>
<title>Askisi 4</title>
</head>

<body>
<div>
	<div>
		<?php	
			if($_REQUEST['name'] == 'admin' && $_REQUEST['pass'] == '123')
			{
				echo "Welcome Admin";
				$_SESSION['name']='Admin';
			}
			else if($_REQUEST['name'] == '' || $_REQUEST['pass'] == '')
			{
				echo "Please fill in all the blanks!";
				echo "<br/><input type='button' value='Go Back' onclick='history.go(-1)'/>";
				echo "<br/><img src='Selections/Pics/Angry.jpg' style='width:500px; height:300px;'/>";
			}
			else
				echo "Unknown User";
		?>
	</div>
</div>
</body>

</html>
