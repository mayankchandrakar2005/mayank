<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>News List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>News Management</h2>

    <?php
    if(isset($_SESSION['msg'])){
        echo "<div class='msg'>".$_SESSION['msg']."</div>";
        unset($_SESSION['msg']);
    }
    ?>

    <a href="add.php" class="button">+ Add News</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
        $res = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['news_date']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit button">Edit</a>
                <a href="action.php?delete=<?php echo $row['id']; ?>" class="delete button">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>