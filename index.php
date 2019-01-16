<?php include'session.php';?>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome </title>
    <link rel="stylesheet" href="style.css">

</head>
<style>


</style>

<body>


<?php include 'header.php';

?>
<div style="margin-top: 1%;" align="center">
    <a href><img src="log.jpg" height="70px" width=350px"> </a>
</div>
<div align="center">
    <form action="loginsuccess.php" method="POST">
        <br>
        <div class="img"></div>

        <hr style="width:390px;">
        <div><br>
            <label>Email ID</label>&nbsp;&nbsp;
            <input type="email" name="userEmail" placeholder="Email_ID" required>
            <br>

            <label>Password</label>&nbsp;
            <input type="password" name="userPass" id="inputPassword" placeholder="Password" required>

            <br/><br/> <input type="submit" value="Login" align="center"> &nbsp;&nbsp;
            <br/><br/><br/>
          Dont have account ? <a href="registration.php">Create an account</a>

        </div>



    </form>
    <br/><br/><br/>
    <div>
    <?php include 'footer.php'; ?>
        </div>
</body>

</html>