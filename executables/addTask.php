<!--
WAD_course: TaskList by Grindelf
-->
<?php
session_start();
require "../utils/header.php";
$task = $_POST['task'];
$date = $_POST['date'];
$request = "INSERT INTO tasklist(task, reporter, state, dueto) VALUES (?,?,?,?)";
$result = $pdo->prepare($request);
$result->execute([$task, $_SESSION['login'], 0, $date]);
header("Location: ../pages/taskList.php");