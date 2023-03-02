<!--
WAD_course: TaskList by Grindelf
page for signing up a new account of the app
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/design.css" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>

<div class="mainField">
    <h1 class="header"> Create your account </h1>
    <p> Please enter your login, invent a password and enter it twice in the fields below:</p>
    <form method="post">
        <div class="mb-3">
            <label for="loginInput" class="form-label">User name</label>
            <input type="text" class="form-control" id="loginInput" name="login"
                   placeholder="Enter your login..." required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                   placeholder="Enter your password..." required>
        </div>
        <div class="mb-3">
            <label for="passwordRepeat" class="form-label">Repeat your password</label>
            <input type="password" class="form-control" id="passwordRepeat" name="passwordRepeat"
                   placeholder="Repeat your password..." required>
        </div>
        <input type="submit" class="btn btn-primary" onclick="location.href='../index.php'"
               value="Create your account" name="submitSigningUp">
    </form>
</div>

</body>
</html>

<?php
require "../utils/header.php";

if (isset($_POST["submitSigningUp"])) {
    $login = $_POST["login"];
    $pdw = $_POST["password"];
    $request = "INSERT INTO logins(login, password) VALUES (?, ?)";
    if ($_POST["password"] == $_POST["passwordRepeat"]) {
        $result = $pdo->prepare($request);
        $result->execute([$login, $pdw]);

        if ($result) echo "Success!";
        else echo "Error";

    } else echo "Your password's doesn't match!";
}
?>
