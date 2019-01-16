<?php
error_reporting(0);
include('session.php');
$yo=$_SESSION['name'];
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Loginsuccess</title>

</head>
<style>
    body {

        position: relative;
    }

    #container {
        margin-top: 90px;
        font-family: "Comic Sans MS";
    }

    #img3 {

        height: 340px;
        width: 512px;
        background: url('21.jpg');
    }

    #img4 {

        height: 500px;
        width: 500px;
        background: url('25.png');
    }

    h3 {
        position: absolute;
    }
</style>
<body>

<?php include 'header2.php'; ?>
<div id="container" align="center">

    <?php




    if (isset($_POST['userEmail']) and isset($_POST['userPass'])) {
//3.1.1 Assigning posted values to variables.
        $username = $_POST['userEmail'];
        $password = $_POST['userPass'];
//3.1.2 Checking the values are existing in the database or not
        $query = "SELECT userId,userName FROM users WHERE userEmail = '$username' and userPass = '$password'";


        $result = mysqli_query($db, $query) or die(mysqli_error($db));
// fetched username from result
        while ($row = mysqli_fetch_row($result)) {
            $yo = $row[1];

        }

        $count = mysqli_num_rows($result);
        $_SESSION['name']=$yo;


//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1) {
            echo "<h3 style='margin-left:1250px;margin-top: -75px; color: blue;'>Hi " . $yo . "</h3>";

            echo "<h2 >Logged in successfully</h2>";
            echo "<br/><br/><a href=\"Exam.php\"\">Go to Exam section</a>";

            echo "<div id='img4'></div>";


            $_SESSION['userEmail'] = $username;


        } else {
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
            $fmsg = "Invalid Login Credentials.";
            echo "<h2>$fmsg</h2>";
            echo "<br/><br/><a href=\"index.php\"\">Try Again</a>";
            echo "<br><br><div id='img3'></div>";

        }
    }
    //3.1.4 if the user is logged in Greets the user with message
    if (isset($_SESSION['userEmail'])) {
        if (isset($_SESSION['userPass'])){
        $username = $_SESSION['userEmail'];
            $password= $_SESSION['userPass'];
        echo "<script> alert(\"login successful\");</script>";


    }} else {

    }
    //3.2 When} the user visits the page first time, simple login form will be displayed.
    ?>


</div>


</body>

</html>