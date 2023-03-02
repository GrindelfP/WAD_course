<!--
WAD_course: TaskList by Grindelf
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome.css" rel="stylesheet">
    <link href="../css/brands.css" rel="stylesheet">
    <link href="../css/solid.css" rel="stylesheet">
    <link href="../css/design.css" rel="stylesheet">
    <title>Task List</title>
</head>
<body>
<h1>Change task</h1>
<form method="post">
    <input type="text" name="task">
    <input type="date" name="date">
    <input type="submit" class="btn btn-primary" value="Change" name="change">
    <input type="button" class="btn btn-outline-danger" onclick="location.href='taskList.php'" value="Cancel">
</form>
</body>
</html>

<?php
if (isset($_POST['change'])) {
    session_start();
    require "../utils/header.php";
    $task = $_POST['task'];
    $date = $_POST['date'];
    $id = $_GET['id'];
    $request = "UPDATE `tasklist` SET task = ?, dueto = ? WHERE id = ?";
    $result = $pdo->prepare($request);
    $result->execute([$task, $date, $id]);
    header("Location: ../pages/taskList.php");
}
