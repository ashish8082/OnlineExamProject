<?php
include 'session.php';
$name=$_SESSION['name'];

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>CSS Quiz</title>

    <link rel="stylesheet"   type="text/css" href="quizcs.css" />
</head>

<body>
<div>
    <?php include 'header2.php';
    ?></div>
<div id="page-wrap">
<?php

$sql = "SELECT question_name,answer1,answer2,answer3,answer4,answer FROM questions WHERE category_id ='1'";
$result = mysqli_query($db, $sql) or die(mysqli_error($db));

// fetched  result
while ($row = mysqli_fetch_assoc($result)) {
    $ques_name = $row['question_name'];
    $ans1 = $row['answer1'];
    $ans2 = $row['answer2'];
    $ans3 = $row['answer3'];
    $ans4 = $row['answer4'];
    $ans= $row['answer'];


echo"<form action='grad_css.php' method='post' id='quiz>";
 echo "<h3 style='margin-left:1250px;margin-top: -75px; color: blue;'>Hi " . $name . "</h3>";

  echo"  <h1 style=' font-size:30px;margin-top: 5%; ' ALIGN='center'> CSS </h1>";
   echo" <hr>";
   echo"<ol>";
        echo"<br>.<br>";
      echo "<li class='question'>";

           echo "<h3>".$ques_name."</h3>";

          echo " <div>";
             echo "   <input type='radio' name='question-1-answers'  value='1'   />";
             echo"   <label for='question-1-answers-A' >". $ans1 ."</label>";
         echo "</div>";

              echo"<div>";
               echo "   <input type='radio' name='question-1-answers'  value='2'   />";
                echo"   <label for='question-1-answers-B' >". $ans2 ."</label>";
           echo "</div>";

          echo"<div>";
echo "   <input type='radio' name='question-1-answers'  value='3'   />";
echo"   <label for='question-1-answers-C' >". $ans3 ."</label>";
echo "</div>";

         echo "<div>";
    echo "   <input type='radio' name='question-1-answers'  value='4'   />";
    echo"   <label for='question-1-answers-C' >". $ans4."</label>";
    echo "</div>";



    echo "<hr>";



    echo "</li>";

    echo "</ol>";











}

echo"<input type='submit' style='margin-top: 3%; margin-left: 30%; padding: 10px 10px 10px; background: #54F585; border-radius: 20px;'
                       value='Submit Quiz' name='submit'/>";

echo "</form>";
?>




                <input type="submit" style="margin-top: 3%; margin-left: 30%; padding: 10px 10px 10px; background: #54F585; border-radius: 20px;"
                       value="Submit Quiz" name="submit"  onclick=" foo();"/>
            </li>

        </ol>



    </form>




</div>



</body>

</html>