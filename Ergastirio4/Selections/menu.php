<ul>
<?php
$q = 'select * from category';

if($result = $mysqli->query($q))
{
	while($row = $result->fetch_array())
	{
		//kanoume to p = showmenu!!!
		print "<li><a href='index.php?p=catinfo&cid=$row[ID]'>$row[Name]</a></li>";
	}
	$result->close();
}
?>
</ul>