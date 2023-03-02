<!--
WAD_course: TaskList by Grindelf
the main task-list page, which contains list of tasks and tools for their management
-->

<?php
session_start();
if ($_SESSION == null) {
    header("Location: ../index.php");
}
?>

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
<form action="../executables/addTask.php" method="post">
    <input type="text" name="task">
    <input type="date" name="date">
    <input type="submit" class="btn btn-primary" value="Add task">
    <a href="../executables/logout.php" class="btn btn-outline-danger">Sign out!</a>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Task</th>
        <th scope="col">Due do date:</th>
        <th scope="col">State</th>
        <th scope="col">Tools</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php
    require "../utils/header.php";

    $request = "SELECT id, task, state, dueto FROM tasklist WHERE reporter = ?";
    $result = $pdo->prepare($request);
    $result->execute([$_SESSION['login']]);

    foreach ($result as $row) {
        echo '<tr>
                <td>
                    ' . $row['task'] . '
                </td>
                <td>
                    ' . $row['dueto'] . '
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                        </ul>
                    </div>
                </td>
                <td>
                    <a href="updateTask.php?id=' . $row['id'] . '">
                        <button type="button" class="btn btn-outline-success">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </a>
                    <a href="../executables/deleteTask.php?id=' . $row['id'] . '">
                        <button type="button" class="btn btn-outline-danger" name="delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </a>
                </td>
              </tr>';
    }
    ?>
    </tbody>
</table>
</body>
</html>
