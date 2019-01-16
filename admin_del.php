<?php
include 'session.php';
$name=$_SESSION['name'];






if(!empty($_POST)) {

    $question = $_POST['question'];




    $sql="DELETE FROM questions
WHERE id = '$question'";

    $result = mysqli_query($db, $sql) or die(mysqli_error($db));


    echo"<script type='text/javascript'>
alert('userdata Data deleted successfully');
</script>";

    echo"<script type='text/javascript'>
            window.setTimeout(function() {
        window.location.href='adminopt.php';
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

    table,td,tr{
        margin-left: 350px;
        border-radius: 10px;
    }

</style>

<div id="header">
    <?php include 'header3.php'; ?>
</div>

<div id="container">
    <form action="" enctype="multipart/form-data"   method="post"  align="center">
        <table border='1' align="center">
            <tr>

                <td colspan='3' align="center" > <div class="img1"> </div></td>
            </tr>



                    <tr>

                        <td colspan='3' align="center" > <label style="font-size: 45px;">Add Question</label></td>
                    </tr>


                    <tr>
                        <td>Enter Question_id</td>
                        <td class="scol"><input type="text" size="70" name="question" title="invalid email id"  placeholder="Enter Question ID" required ></td>
                    </tr>



                   <tr> <td colspan="3" align="center"><input type="submit" value="Delete" style="border-radius: 30px;"> 	</tr>

        </table>



        <?php

        $sql = "SELECT * FROM questions ";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));

        $n=0;
        echo'<table>';

        echo' <tr>';
        echo'<th>ID</th>';
        echo' <th> question</th>';
        echo'</tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $n++;
            $id=$row['id'];
            $ques=$row['question_name'];




            echo' <td>';
            echo' <tr>';
            echo'<td>'.$id.'</td>';
            echo'<td>'. $ques.'</td>';
            echo' </tr>';
            echo'</td>';



            echo'</div>';







        }

        echo' </table>';
        ?>






    </form>
    <br/><br/><br/>
</div>



</body>
</html>