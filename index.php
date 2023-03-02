<!--
WAD_course: TaskList by Grindelf
this is a main entry-point for app and also the log-in page
-->
<?php
session_start();
if ($_SESSION != null) {
    header("Location: pages/taskList.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/design.css" rel="stylesheet">
    <title>Log In</title>
</head>
<body>

<div class="mainField">
    <h1 class="header"> Log into "The TaskList" </h1>
    <p> Please enter your name and password in the fields below:</p>
    <form method="post">
        <div class="mb-3">
            <label for="login" class="form-label">User name</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <section>
            <input type="submit" class="btn btn-primary" onclick="location.href='pages/taskList.php'"
                   value="Log in" name="logIn">
            <input type="button" class="btn-create-account btn btn-primary" onclick="location.href='utils/signUp.php'"
                   value="Create an account">
        </section>
    </form>
</div>

</body>
</html>

<?php
require "utils/header.php";

if (isset($_POST["logIn"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];

    $request = "SELECT * FROM logins WHERE login = ? AND password = ?";
    $result = $pdo->prepare($request);
    $result->execute([$login, $password]);

    if ($row = $result->fetch()) {
        session_start();
        $_SESSION['login'] = $row['login'];
        header("Location: pages/taskList.php");
    }
}
?>
