<html>
<head>
    <meta charset="utf-8">
    <title>My Project</title>
    <style type="text/css">

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
        }

        li {
            float: left;

            font-family: "Franklin Gothic Medium";
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 30px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */

        li a:hover {
            background-color: white;
            text-decoration: underline;
            color: black;
            text-transform: lowercase;
        }

        #fixedheader {
            top: 0px;
            left: 0px;
            width: 100%;
            color: black;
            background: black;
            padding: 5px;
            position: relative;
            margin: 0;

        }

        .spacer {
            width: 100%;
            height: 5%;
        }

        .not-active {
            pointer-events: none;
            cursor: default;
        }

    </style>
</head>

<body>
<a href><img src="banner.jpg" height="110px" width="1024"> </a>
<div id="fixedheader">
    <ul>
        <li><a href="index.php" name="home" id="home">HoMe</a></li>

        <li><a href="Exam.php">ExAm</a></li>
        <li><a href="contact1.php">CoNtAct</a></li>
        <li><a href="about.php">ABOuT</a></li>
        <li><a href="adlog.php">Admin</a></li>
        <li><a href="Edit_profile.php">Edit profile</a></li>
        <li><a href="logout.php">Logout</a></li>



    </ul>
</div>
<div class="spacer">

</div>

</body>
</html>