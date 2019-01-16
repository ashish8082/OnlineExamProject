<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="project";
	$table="questions";
	
	$query=mysql_quer("select * from $table where category_id=".$id);
	echo "<div id='loadquestions'>";
	echo "<form action ='submitans.php' action='post'>";
	$suffix=1;
	while($row=mysql_fetch_array())
	{
		echo "<tr>";
			echo "<td>";
				echo $row[1];
			echo "</td>";
		echo "</tr>";
		

		echo "<tr>";
			echo "<td>";
				echo "<input type='radio' name='rb'".$suffix." value=".$row[2]/>";
			echo "</td>"
		echo "</tr>";

		echo "<tr>";
			echo "<td>";
				echo $row[3];
			echo "</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td>";
				echo $row[4];
			echo "</td>";
		echo "</tr>";
		$suffix++;
	}
	echo "</form>";
	echo "</div>";	
	
?>

<html>
<head><title>  </title>


</head>
<body>
 
  <div id="category">
	 <select name="cmbbox">
		<option value='1'>CSS</option>
		<option value='2'>HTML</option>
		<option value='3'>PHP</option>
	 </select>	
  </div>  
 	
</body>
</html>