<?php include 'session.php';
$name=$_SESSION['name'];
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>

</head>

<style type="text/css">

    body{
        margin-top: 5%;
        background:transparent;

    }
   .button_active{

       margin-top: 20px;
       display: inline-block;
       color: #666;
       background-color:floralwhite;
       letter-spacing: 2px;
       font-size: 12px;
       height: 45px;
       width: 150px;
       border-radius: 3px;
       border: 1px solid rgba(0,0,0,0.3);
       border-bottom-width: 3px;
       font-family:Comic Sans MS;
   }
   .button_active:hover{
       background-color: black;
       color: white;
       height: 45px;
       width: 170px;
       border-radius: 3px;
       border: 1px solid aqua;
   }
    hr.a{

        width: 450px;
        border: 1px inset aquamarine;
    }
</style>


<body align="center">
<?php include'header.php'?>



<div style="border: 3px;border-color: #54F585;">
    <br/><br/><br/><br/><br/><br/><br/><br/>
<a href="Quiz-css1.php"><input type="submit" class="button_active" value="Take Quiz"></a><br/><br/>


</div>



</body>
</html>