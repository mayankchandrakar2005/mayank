<?php
include "config.php";

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['news_date'];
    mysqli_query($conn, "INSERT INTO news (title, description, news_date) VALUES ('$title','$desc','$date')");
    $_SESSION['msg'] = "News Added Successfully";
    header("Location: index.php");
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['news_date'];
    mysqli_query($conn, "UPDATE news SET title='$title', description='$desc', news_date='$date' WHERE id=$id");
    $_SESSION['msg'] = "News Updated Successfully";
    header("Location: index.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM news WHERE id=$id");
    $_SESSION['msg'] = "News Deleted Successfully";
    header("Location: index.php");
}
?>