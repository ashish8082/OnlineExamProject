<?php include 'session.php';?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>
<link rel="stylesheet" href="style1.css" >



<body>

	<div id="header">
		<?php include 'header.php'; ?>
	</div>

	<div id="container">
		<form action="registrationsuccess.php" enctype="multipart/form-data"   method="post" >
		<table border='1' align="center">
			<tr>

				<td colspan='3' align="center" > <div class="img1"> </div></td>
			</tr>

			
			<tr>
				<td>Name</td>
				<td class="scol"><input type="text" size="15" name="txtcname"  required></td>
				<td rowspan="3">

					<div id="photo">
						&nbsp;<img id="output" src="reg.png" alt="Upload your passfort size photo 145 px  X 145 px " required />
					</div>

				</td>
			</tr>
			<tr>
				<td>Email Id</td>
				<td class="scol"><input type="email" size="15" name="txtemailid" title="invalid email id" required ></td>
			</tr>
			<tr>
				<td>Contact[Mobile]</td>
				<td class="scol"><input type="text" maxlength="10" name="txtcontact" pattern="^((\+){0,1}91(\s){0,1}(\-){0,1}(\s){0,1}){0,1}98(\s){0,1}(\-){0,1}(\s){0,1}[1-9]{1}[0-9]{7}$" title="Invalid mobile number" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td class="scol" colspan="2"><input type="password" size="15" name="txtpassword" required ></td>
			</tr>
			<tr>
				<td>Confirm Password </td>
				<td class="scol" colspan="2"><input type="password" size="15" name="txtconfirmpass"   required><span id="errormsg"></span></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" value="submit"></td>

			</tr>
		</table>




		</form>
		<br/><br/><br/><div id="footer" >
			<?php include 'footer.php'; ?>
		</div>
	</div>



</body>
</html>