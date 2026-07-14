<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
session_start();
?>