<table>
<tr>
	<th>Title</th>
	<th>Desc</th>
</tr>
<?php
$cat = $_REQUEST['cid'];
//"Category=?": Vazw tosa i stin me9odo bind_param osa ? 9a valw sto query $q
$sql = "select * from product where Category=?";
print "<pre>cat = $cat</pre>";
print "<pre>sql = $sql</pre>";

if( $stmt = $mysqli->prepare($sql) ) {
	$stmt->bind_param("i", $cat);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
		print "<tr><td>$row[Title]</td>".
		"<td>$row[Description]</td></tr>";
	}
}
?>
</table>