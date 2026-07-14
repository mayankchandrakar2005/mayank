<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Add News</h2>
    <form method="post" action="action.php">
        <label>Title</label>
        <input type="text" name="title" required>

        <label>Description</label>
        <textarea name="description" required></textarea>

        <label>Date</label>
        <input type="date" name="news_date" required>

        <br><br>
        <button type="submit" name="add">Save</button>
    </form>
</div>
</body>
</html>