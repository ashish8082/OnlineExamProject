
<?php
require 'config.php';
error_reporting(0);
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>CSS Quiz</title>
	
		<script type= "text/javascript">  
		function timeout()
		{
		
			var minute = Math.floor(timeleft/60);
			var second = timeleft%60;
			if (timeleft <=-1)
		{ 
			var a=document.getElementById("time").innerHTML;

			var b="0:0";

			if(a===b)
			{
			document.getElementById('form-submit').click();
			}
			else
			{
				alert("not submit");
			}
				
		}
		else
			
		{
				if(minute>0)
				{
					minute="0"+minute;
				}
			document.getElementById("time").innerHTML =minute+":"+second;
		}
		timeleft--;
		var tm=setTimeout(function(){timeout()},1000);
		
		}
	

	</script>

	

</head>
<style>



    #page-wrap {
        width: 500px;
        height: 12%;
        font: 18px bold Franklin Gothic medium;
        margin: 0 0 0 450px;
        border: 2px;

        left: 50%;

    }
      input[type=radio] {
        vertical-align: middle;


    }

    h1 {
        font-family: Geneva;
        font-size: 15px;
        margin: 0 0 -15px 0;
        color: black;
        margin-left:25px;;
        margin-top:-15px;


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
 h3 {
        font-family: Geneva;
        font-size: 20px;
        margin: 0 0 1px 0;
        color: #666;

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


<body onload="timeout()"></body>
<div>
    <?php 
	include 'header2.php'; 
	?>
	</div>


<div id="page-wrap">
   <h3 style="margin-left: 200px;">Take Quiz
   
   <script type="text/javascript">  
	  var timeleft=4*60; 
	</script>
	
   <div id="time" style="margin-left:450px">timeout</div>
   </h3>
    <br/>
	
	
	
    <form  method="post" action="grad_css.php" id="quiz">


        <?php

        $sql = "SELECT id,question_name,answer1,answer2,answer3,answer FROM questions ";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));


        while ($row = mysqli_fetch_assoc($result)) {

			echo $row['$answer'];

            echo " <div>";
            echo "<h3>". $row['question_name'] ."</h3>"."</br>";
            echo "</div>";

            echo " <div>";
            echo "   <input type='radio' name='".$row['id']."' value='"  . $row['answer1']."'  />"."<h1>".$row['answer1']."</h1>"."</br>";
            echo "</div>";

            echo " <div>";
            echo "   <input type='radio' name='".$row['id']."' value='"  . $row['answer2']."'  />"."<h1>".$row['answer2']."</h1>"."</br>";
            echo "</div>";

            echo " <div>";
            echo "   <input type='radio' name='".$row['id']."' value='"  . $row['answer3']."'  />"."<h1>".$row['answer3']."</h1>"."</br>";
            echo "</div>";
            echo"<hr>";
            echo"<hr>";


        }?>

        <input type="submit" style="margin-top: 3%; margin-left: 30%; padding: 10px 10px 10px; background: #54F585; border-radius: 20px;"
		value="submit" name="submit"  id="form-submit"/>
    </form>


    <?php

    if(isset($_POST['submit']))
    {
        $sql = "SELECT * FROM questions ";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));

		$score=0;
        $id = mysqli_num_rows($result);


        for($i=1; $i<=$id; $i++)
        {
          $row=mysqli_fetch_assoc($result);


            if($_POST["$i"]==$row['answer'])
                $score++;
        }


     echo"you scored:<font color='red>'<strong>".$score."/".$id."</strong></font>";

    }

    ?>

        </div>
		  </body>
        </html>


