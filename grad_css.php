<?php  include'session.php';
$name=$_SESSION['name'];
error_reporting(0);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="quizcs.css"/>
</head>
<style>
    table, td,th {

        border: 1px outset #999999;
        height: 30%;
        width: 50%;
        border-radius: 3px;

        font-family: "Comic Sans MS";





    }

    table:hover, td:hover {

        border-color: transparent;

    }

</style>

<body>
<div>
    <?php include 'header2.php'; ?></div>

<div id="page-wrap" align="center">



    <h1>Your Result</h1>
    <?php

    if(isset($_POST['submit']))
    {
        $sql = "SELECT * FROM questions  ";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));

        $score=0;
        $id = mysqli_num_rows($result);


        for($i=1; $i<=$id; $i++)
        {
            $row=mysqli_fetch_assoc($result);


            if($_POST["$i"]==$row['answer'])
                $score++;
        }
        echo "<div id='results' align='center'>".$score."/" .$id."</div>";


        if ($score <= 10) {
            echo "<br><div id='results' align='center' style='font-size: 35px;'>Not so good,keep Trying.. :(</div>";

        }

        if ($score >= 10 ) {
            echo "<br><div id='results' align='center' style='font-size: 35px;'>Good Job... :)</div>";

        }

        $name=$_SESSION['name'];


        $sql = "update users set score='$score' where userName='$name'";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));

    }

    ?>

    <?php

    $sql = "SELECT answer FROM questions ";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));

$n=0;
    while ($row = mysqli_fetch_assoc($result)) {
$n++;
$ans=$row['answer'];

 echo'<br>';
   echo'<div style="page-wrap">';
    echo'<table>';
        echo'<td>';
   echo' <tr>';
        echo'<th>Question</th>';
       echo' <th> answers</th>';
    echo'</tr>';
    echo'</td>';

   echo' <td>';
       echo' <tr>';
        echo'<td>'.'Q.'.$n.'</td>';
            echo'<td>'. $ans.'</td>';
   echo' </tr>';
    echo'</td>';

   echo' </table>';

echo'</div>';







}?>




</div>



</div>

<div style="background: url('12.gif');height: 250px;width: 200px; margin-left:42%;"></div>


</body>

</html>