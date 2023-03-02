<!--
WAD_course: TaskList by Grindelf
this file sets up main credentials and names for further use in php code
which are common in different cases
-->
<?php
$serverName = "localhost";
$dataBaseName = "todolistlogins";
$userName = "root";
$password = "";

$pdo = new PDO("mysql:host=$serverName;dbname=$dataBaseName", $userName, $password);
