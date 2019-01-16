<?php
include 'session.php';
$name=$_SESSION['name'];




$sql="SELECT userEmail,userPass,userCont FROM users where userName='$name'";
$result1 = mysqli_query($db, $sql) or die(mysqli_error($db));

// fetched  result
while ($row = mysqli_fetch_row($result1)) {


    $useremail1 = $row[0];
    $userpass1= $row[1];
    $usercont1= $row[2];
}




        if(!empty($_POST)) {
            $username2 = $_POST['txtname'];
            echo $username2;
            $useremail2 = $_POST['txtemailid'];
            echo $useremail2;
            $usercont2 = $_POST['txtcontact'];
            echo $usercont2;
            $userpass2 = $_POST['txtpassword'];
            echo $userpass2;


            $sql = "update users set userName='$username2',userEmail='$useremail2',userPass='$userpass2',userCont='$usercont2' where userName='$name'";

            $result = mysqli_query($db, $sql) or die(mysqli_error($db));

            echo"<script type='text/javascript'>
alert('userdata updated successfully');
</script>";

            echo"<script type='text/javascript'>
            window.setTimeout(function() {
                window.location.href='index.php';
            }, 200);
</script>";

        }

?>




<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
</head>
<link rel="stylesheet" href="style1.css" >

<body>

<style>

    table{
        margin-left: 350px;
    }

</style>

<div id="header">
    <?php include 'header2.php'; ?>
</div>

<div id="container">
    <form action="" enctype="multipart/form-data"   method="post"  align="center">
        <?php echo "<h3 style='margin-left:1250px;margin-top: -75px; color: blue;'>Hi " . $name . "</h3>";?>
        <table border='1' align="center">
            <tr>

                <td colspan='3' align="center" > <div class="img1"> </div></td>
            </tr>


            <tr>
                <td>name</td>
                <td class="scol"><input type="text" size="15" name="txtname" title="invalid email id"  value='<?php echo"$name"?>' required ></td>
            </tr>

            <td>Email ID</td>
            <td class="scol"><input type="email" size="15" name="txtemailid" title="invalid email id"  value='<?php echo"$useremail1"?>' required ></td>
            </tr>

            <tr>
                <td>Contact[Mobile]</td>
                <td class="scol"><input type="text" maxlength="10" value='<?php echo"$usercont1"?>' name="txtcontact" pattern="^((\+){0,1}91(\s){0,1}(\-){0,1}(\s){0,1}){0,1}98(\s){0,1}(\-){0,1}(\s){0,1}[1-9]{1}[0-9]{7}$" title="Invalid mobile number" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td class="scol" colspan="2"><input type="password" size="15" name="txtpassword"  value='<?php echo"$userpass1"?>' required ></td>
            </tr>
            <tr>
                <td>Confirm Password </td>
                <td class="scol" colspan="2"><input type="password" size="15" name="txtconfirmpass"  value='<?php echo"$userpass1"?>' required ><span id="errormsg"></span></td>
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