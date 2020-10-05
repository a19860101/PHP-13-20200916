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
            <th>Mail</th>
            <th>電話</th>
            <th>性別</th>
            <th>學歷</th>
            <th>專長</th>
            <th>備註</th>
        </tr>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["mail"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["edu"]; ?></td>
            <td><?php echo $row["skills"]; ?></td>
            <td><?php echo $row["remark"]; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>