<!DOCTYPE html>
<html>

<head>
	<title>Untitled 1</title>
	<script>
		function changeProducts(sel)
		{
			var image = document.getElementById("pro");
			if(sel.value == "cs")
				image.src = "Selections/Products/ai.jpg"
			else if(sel.value == "ph")
				image.src = "Selections/Products/interstellar.jpg"
			else
				image.src = "Selections/Products/discretemaths.jpg"
		}
	</script>
</head>

<body>
<div style="text-align:center">
	<select style="width:150px" onchange="changeProducts(this)">
		<option value="cs">Computer Science</option>
		<option value="ph">Physics</option>
		<option value="ma">Mathematics</option>
	</select><br/><br/>
	<img alt="." id="pro" src="Selections/Products/ai.jpg" style="width:250px; height:350px">
</div>
</body>

</html>
