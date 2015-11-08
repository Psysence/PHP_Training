<table>
<tr>
	<th>Title</th>
	<th>Desc</th>
	<th>Price</th>
	<th>Value</th>
	<th>Add</th>
</tr>
<?php
//"Category=?": Vazw tosa i stin me9odo bind_param osa ? 9a valw sto query $q
$q = "select * from product ";
$stmt = $mysqli->prepare($q);


if($stmt->execute())
{
	$result = $stmt->get_result();
	while($row = $result->fetch_array())
	{
		print "<tr><td>$row[Title]</td>".
		"<td>$row[Description]</td></tr>";
	}
	$result->close();	
}
?>
</table>