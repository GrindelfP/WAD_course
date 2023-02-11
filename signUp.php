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
    <link href="design.css" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>

<div class="mainField">
    <h1 class="header"> Create your account </h1>
    <p> Please enter your login, invent a password and enter it twice in the fields below:</p>
    <form>
        <div class="mb-3">
            <label for="loginInput" class="form-label">User name</label>
            <input type="text" class="form-control" id="loginInput" required>
        </div>
        <div class="mb-3">
            <label for="inputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="inputPassword2" class="form-label">Repeat your password</label>
            <input type="password" class="form-control" id="inputPassword2" required>
        </div>
        <input type="button" class="btn btn-primary" onclick="location.href='taskList.php'"
               value="Create your account">
    </form>
</div>

</body>
</html>
