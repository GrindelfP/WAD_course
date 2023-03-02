<!--
WAD_course: TaskList by Grindelf
-->
<?php
session_start();
require "../utils/header.php";
$id = $_GET['id'];
$request = "DELETE FROM tasklist WHERE id = ?";
$result = $pdo->prepare($request);
$result->execute([$id]);
header("Location: ../pages/taskList.php");
