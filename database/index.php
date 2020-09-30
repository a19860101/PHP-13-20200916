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
    <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["mail"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["gender"]."</td>";
            echo "<td>".$row["edu"]."</td>";
            echo "<td>".$row["skills"]."</td>";
            echo "<td>".$row["remark"]."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>