<?php
session_start();
$conn = mysqli_connect("localhost", "root", "@Yasinhatami13853413", "user_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>