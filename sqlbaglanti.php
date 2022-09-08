<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
$con = mysqli_connect($servername, $username, $password);


try {
    $conne = new PDO("mysql:host=$servername;dbname=otobusdeneme", $username, $password);
    $conne->query("SET CHARACTER SET utf8");
    // set the PDO error mode to exception
    $conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>
<html>
	<meta charset="utf-8">
	<meta name="description" content="Sıfırdan Web Tasarım Projesi - Havva Zeynep Akdemir">
	<meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
	<meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
</html>