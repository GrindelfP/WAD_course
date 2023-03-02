<!--
WAD_course: TaskList by Grindelf
-->
<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: ../index.php");
