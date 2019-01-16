<?php include 'session.php';?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Success</title>
<style type="text/css">
	
	#container
	{
		margin-top:8%;
	}
	h2{
		font-family: "Comic Sans MS";
	}
	hr{
		width: 500px;
		border:1px inset aqua;
	}
</style>
</head>

<body>

	<div id="header">
		<?php include 'header.php'; ?>
	</div>	
	<div id="container" align="center">
		<?php
			//insertion code goes here

		     //connection

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "project";

$stmt = $db->prepare("INSERT INTO users  (userName,userEmail, userPass,userCont) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $cname, $emailid, $password ,$contact);


$cname=$_REQUEST['txtcname'];
$emailid=$_REQUEST['txtemailid'];
$password=$_REQUEST['txtpassword'];
$contact=$_REQUEST['txtcontact'];



$stmt->execute();

echo "<h2 >New records created successfully</h2>"."</br>";



$stmt->close();
$db->close();

echo"<script type='text/javascript'>
            window.setTimeout(function() {
                window.location.href='index.php';
            }, 5000);
</script>";

		?>

	</div>

</body>
</html>