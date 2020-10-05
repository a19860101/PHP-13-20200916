<?php
    require_once("conn.php");
    // require,require_once,include,include_once
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello title</h1>
    <a href="create.php">新增資料</a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>電話</th>
            <th></th>
        </tr>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td>
                <a href="show.php?id=<?php echo $row["id"]; ?>">檢視</a>
                <form action="delete.php" method="post">
                    <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                    <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
                </form>
                <a href="edit.php?id=<?php echo $row["id"]; ?>">編輯</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>