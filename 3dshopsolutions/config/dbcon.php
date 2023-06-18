<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "phpecom";

$con = mysqli_connect($host,$username,$password,$database);

//checking database connection
if(!$con)
{
    die("connection failed: ".mysqli_connect_error());
}
else{
    echo "<h3>connected successfully</h3>";
}

?>