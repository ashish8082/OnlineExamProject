<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'project');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$db) {
    die("Database Connection Failed" . mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'project');
if (!$select_db) {
    die("Database Selection Failed" . mysqli_error($db));
}

?>