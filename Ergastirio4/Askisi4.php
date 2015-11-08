<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Askisi 4</title>
</head>

<body>
<form action="RegistrationForm.php" method="get">
	<?php
		if(!isset($_REQUEST['name']))
		{
			print "GO BACK!!!... <a href='RegistrationForm.php'>Go back</a>";
			exit;
		}
		else
		{
			print "<pre>";
			print_r($_REQUEST);
			print "</pre>";
			
			print "<br/>Name: ".$_REQUEST['name'];
			print "<br/>Address: ".$_REQUEST['address'];
			print "<br/>Phone Number: ".$_REQUEST['phone'];
			print "<br/>Gender: ".$_REQUEST['sex'];
			print "<br/>Age: ".$_REQUEST['age'];
			print "<br/>E-Mail: ".$_REQUEST['email'];
		}
	?>
	<?php
		foreach($_REQUEST as $k=>$v)
		{
			print "<input type='hidden' name='$k' value='$v'/>";
		}
	?>

	<input type="submit"/>
</form>
<br/>

</body>

</html>
