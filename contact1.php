<?php include 'session.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>


<script>
    function phoneno() {
        $('#phone').keypress(function (e) {
            var a = [];
            var k = e.which;

            for (i = 48; i < 58; i++)
                a.push(i);

            if (!(a.indexOf(k) >= 0))
                e.preventDefault();
        });
    }
</script>

<style>

    input[type="text"], input[type="email"], input[type="password"], textarea {
        width: 240px;
        height: 30px;
        border-radius: 15px;
        border-color: #111111;
        background-color: ghostwhite;
        font-family: "Franklin Gothic Medium";

    }
</style>


<body>

<div id="header">
    <?php include 'header.php'; ?>
</div>

<div style="margin-top: 3%;">


    <?php
    //insertion code goes here

    //connection

    if(!empty($_POST)) {

        $c_name = $_POST['txtname'];
        $c_cont = $_POST['txtcontact'];
        $c_query = $_POST['query'];


        $sql = "insert into contact(c_name,contact,query)
 values ('$c_name','$c_cont','$c_query')";

        $result = mysqli_query($db, $sql) or die(mysqli_error($db));


        echo "<script type='text/javascript'>
alert('userdata updated successfully');
</script>";


        echo "<h2 >New records created successfully</h2>" . "</br>";



    }

    ?>
    <form action="" enctype="multipart/form-data" method="post" align="center">
        <table border='1' align="center">

            <tr>

                <td colspan='3' align="center">
                    <div id="img2"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><h3> Want to get in touch with us?</h3>
                    <h5>We are more than happy to hear from you.<br/> please fill free to contact us regarding any
                        questions you may have</h5>
                </td>

            </tr>


            <tr>
                <td>Name</td>
                <td class="scol"><input type="text" size="15" name="txtname" title="invalid email id" required></td>
            </tr>
            <tr>
                <td>Contact[Mobile]</td>
                <td class="scol"><input type="text" maxlength="10" name="txtcontact"required></td>
            </tr>
            <tr>
                <td>Enter Query</td>
                <td><textarea style="height: 80px;" rows="4" cols="50" name="query"></textarea></td>

            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" value="submit"></td>

            </tr>

        </table>
    </form>


</div>
<br/><br/><br/>

<div>
    <?php include 'footer.php'; ?>
</div>

</body>
<!-- Body Ends Here -->
</html>