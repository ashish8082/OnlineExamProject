<?php 
    include("db.php");	
	$query1 = "SELECT * FROM upload LIMIT 5";
	$result = mysql_query($query1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File download concept</title>
</head>
<style type="text/css">

.contain { width:500px; min-height:300px; border:2px black dashed ; margin:0 auto; margin-top:100px; }
.rect { width:400px; min-height:25px; margin:0 auto; padding:10px; border:1px solid red; margin-top:10px; }
a { font-size:15px; font-family:Tahoma, Geneva, sans-serif; text-decoration:none; color:black; text-transform:capitalize; font-weight:bold;}
a:hover { font-size:15px; font-family:Tahoma, Geneva, sans-serif; text-decoration:none; color: #ff0900; text-transform:capitalize; font-weight:bold;}


</style>
<body>

<div class="contain">

<?php
while($row1=mysql_fetch_array($result))
{
	$name=$row1['name'];
	$type=$row1['type'];
	?>
<div class="rect">
<img alt="down-icon" src="down-drop-icon.png" align="left" width="20" height="20" />
<a href="download.php?filename=<?php echo $name ;?>" >
<?php echo $name ;?></a>
</div>
<?php }?>


</div>
</body>
</html>