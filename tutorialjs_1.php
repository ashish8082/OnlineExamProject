<html>
<head><title>Understanding Javascript </title>
<script type="text/javascript">

	var element;
	function clickme()
	{
	  document.getElementById("output").innerHTML="More text";
	  
		
	}
</script>
</head>
<body>
	<div id="output">
		Sometext
	</div>

	<input type="button" value="change me" onclick="clickme();" />	

</body>
</html>


