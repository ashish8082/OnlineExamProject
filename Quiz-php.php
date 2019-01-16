<?php
include 'session.php';
$name = $_SESSION['name'];

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>PHP Quiz</title>


</head>
<style>

    body {
        margin-top: 1%;
        font-family: "Comic Sans MS";
    }

    #page-wrap {
        width: 500px;
        height: 12%;
        font: 18px bold Franklin Gothic medium;

        margin: 0 0 0 450px;

        left: 50%;

    }
    .quiz input[type=radio] {
        vertical-align: middle;
        border: 1px outset black;

    }

    h1 {
        margin: 25px 0;
        font: 14px Georgia, Serif;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .quiz label {
        vertical-align: middle;
        font-weight:bolder;
        padding-bottom:3px;

    }

    .quiz ol {

    }

    .quiz ol li {

    }

    .quiz ol li div {

    }

    .quiz h3 {
        font-family: Geneva;
        font-size: 20px;
        margin: 0 0 1px 0;
        color: #666;
        padding-bottom:3px;
    }

    #results {

        font-size: 44px;
        font-family: "Franklin Gothic Medium";
    }

    hr {

        width: 500px;
    }

    .img {
        height: 200px;
        width: 200px;
        background: url('12.gif');
    }
</style>



<body>
<div>
    <?php include 'header2.php'; ?></div>
<div id='page-wrap'>
    <?php

    $sql = "SELECT question_name,answer1,answer2,answer3,answer4,answer FROM questions WHERE category_id ='3'";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));


    echo "<h1 style=' font-size:30px;margin-top: 5%; ' ALIGN='center'>" . 'PHP' . "</h1>";

    /// fetched  result
    while ($row = mysqli_fetch_assoc($result)) {
        $ques_name = $row['question_name'];
        $ans1 = $row['answer1'];
        $ans2 = $row['answer2'];
        $ans3 = $row['answer3'];
        $ans4 = $row['answer4'];



        echo "<form action='grad_css.php' method='post' id='form1' class='quiz'>";


        echo " <hr>";

        echo "<br>" . "<br>";


        echo "<h3>" . $ques_name . "</h3>";

        echo " <div>";
        echo "   <input type='radio' name='question-1-answers'  value='1'  class  />";
        echo "   <label for='question-1-answers-A' >" . $ans1 . "</label>";
        echo "</div>";

        echo "<div>";
        echo "   <input type='radio' name='question-1-answers'  value='2'   />";
        echo "   <label for='question-1-answers-B' >" . $ans2 . "</label>";
        echo "</div>";

        echo "<div>";
        echo "   <input type='radio' name='question-1-answers'  value='3'   />";
        echo "   <label for='question-1-answers-C' >" . $ans3 . "</label>";
        echo "</div>";

        echo "<div>";
        echo "   <input type='radio' name='question-1-answers'  value='4'   />";
        echo "   <label for='question-1-answers-C' >" . $ans4 . "</label>";
        echo "</div>";


        echo "</form>";




    }

    echo "<button type='submit' form='form1' value='Submit' style='margin-top: 3%; margin-left: 30%; padding: 10px 10px 10px;width: 100px; background: #54F585; border-radius: 20px;'>".'submit'."</button>";





    ?>


</div>


</body>

</html>