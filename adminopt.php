<?php include 'session.php';?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin operation</title>

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
<?php include'header3.php'?>

<u><h3 style="font:30px 'Franklin Gothic Medium'; " ALIGN="center">Choose Operation</h3><hr></u>


<div>
    <a href="admin_add.php"><input type="submit" class="button_active" value="Add DATA"></a><br/><br/>


</div>

<div>
    <a href="admin_del.php"><input type="submit" class="button_active" value="Delete DATA"></a><br/><br/>


</div>

<br/>

</body>
</html>