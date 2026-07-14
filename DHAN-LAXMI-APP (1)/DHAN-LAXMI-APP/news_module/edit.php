<?php 
include "config.php";
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM news WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Edit News</h2>
    <form method="post" action="action.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" required>

        <label>Description</label>
        <textarea name="description" required><?php echo $row['description']; ?></textarea>

        <label>Date</label>
        <input type="date" name="news_date" value="<?php echo $row['news_date']; ?>" required>

        <br><br>
        <button type="submit" name="update">Update</button>
    </form>
</div>
</body>
</html>