<?php include 'session.php';












if(!empty($_POST)) {

    $question = $_POST['question'];

    $ans1 = $_POST['ans1'];

    $ans2 = $_POST['ans2'];

    $ans3 = $_POST['ans3'];
    $ans = $_POST['ans'];


    $sql="insert into questions(question_name,answer1,answer2,answer3,answer)
    values ('$question','$ans1','$ans2','$ans3','$ans')";

    $result = mysqli_query($db, $sql) or die(mysqli_error($db));


    echo"<script type='text/javascript'>
alert('userdata updated successfully');
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
    <title>Admin panel</title>
</head>
<link rel="stylesheet" href="style1.css" >

<body>
<style>
    
 table{
    margin-left: 350px;
 }   
    
</style>

<div id="header">
    <?php include 'header3.php'; ?>
</div>

<div id="container">
    <form action="" enctype="multipart/form-data"   method="post"  align="center">
        <table border='1' align="center">
            <tr>

                <td colspan='3' align="center" > <label style="font-size: 45px;">Add Question</label></td>
            </tr>


            <tr>
                <td>Question name</td>
                <td class="scol"><input type="text" size="70" name="question" title="invalid email id"  placeholder="Enter Question name in format" required ></td>
            </tr>
            <tr>
                <td>answer1</td>
                <td class="scol"><input type="text" maxlength="50" name="ans1" placeholder="Enter first answer" title="Invalid mobile number" required></td>
            </tr>
            <tr>
                <td>answer2</td>
                <td class="scol" colspan="2"><input type="text" size="50" name="ans2" placeholder="Enter second answer" required ></td>
            </tr>
            <tr>
                <td>answer3</td>
                <td class="scol" colspan="2"><input type="text" size="50" name="ans3" placeholder="Enter third answer" required ><span id="errormsg"></span></td>
            </tr>

            <tr>
              <td>Right_answer</td>
               <td class="scol" colspan="2"><input type="text" size="50" name="ans"  placeholder="answer should be 1 from 3 above" required ><span id="errormsg"></span></td>
            </tr>


            <tr>
                <td colspan="3" align="center"><input type="submit" value="Add"> 				</td>

            </tr>

        </table>








    </form>
    <br/><br/><br/>
</div>



</body>
</html>