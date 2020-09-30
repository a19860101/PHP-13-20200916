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
    <?php
        while($row = mysqli_fetch_assoc($result)){
            // var_dump($row);
            echo $row["name"];
            echo " / ";
            echo $row["mail"];
            echo " / ";
            echo $row["phone"];
            echo " / ";
            echo $row["gender"];
            echo "<br>";
        }
    ?>
</body>
</html>