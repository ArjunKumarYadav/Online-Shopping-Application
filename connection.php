<?php
$con = mysqli_connect('127.0.0.1', 'root', null, 'student_shopping');
if (!$con) {
    die('connection failed ' . mysqli_connect_error());
}
