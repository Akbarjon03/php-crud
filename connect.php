<?php
    $con = new mysqli('localhost', '', '', 'php_crud');

    if (!$con) {
        die(mysqli_error($con));
    }
?>