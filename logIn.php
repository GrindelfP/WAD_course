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
    <title>Log In</title>
</head>
<body>

<div class="mainField">
    <h1 class="header"> Log into "The TaskList" </h1>
    <p> Please enter your name and password in the fields below:</p>
    <form>
        <div class="mb-3">
            <label for="loginInput" class="form-label">User name</label>
            <input type="text" class="form-control" id="loginInput">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <section>
            <input type="button" class="btn btn-primary" onclick="location.href='taskList.php'"
                   value="Log in">
            <input type="button" class="btn-create-account btn btn-primary" onclick="location.href='signUp.php'"
                   value="Create an account">
        </section>
    </form>
</div>

</body>
</html>
