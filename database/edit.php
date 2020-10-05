<?php
    require_once("conn.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id=".$id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="">姓名</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $row["name"];?>">
                    </div>
                    <div class="form-group">
                        <label for="">電話</label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $row["phone"];?>">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" name="mail" class="form-control" value="<?php echo $row["mail"];?>">
                    </div>
                    <div class="form-group">
                        <label>性別</label>
                        <label for="male">
                            <input type="radio" name="gender" id="male" value="男" <?php echo $row["gender"]==="男"?"checked":"";?>>男
                        </label>
                        <label for="female">
                            <input type="radio" name="gender" id="female" value="女" <?php echo $row["gender"]==="女"?"checked":"";?>>女
                        </label>
                        <label for="unknown">
                            <input type="radio" name="gender" id="unknown" value="不透漏"  <?php echo $row["gender"]==="不透漏"?"checked":"";?>>不透漏
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="edu">學歷</label>
                        <select name="edu" id="edu" class="form-control">
                            <option value="國小" <?php echo $row["edu"]==="國小"?"selected":"";?>>國小</option>
                            <option value="國中" <?php echo $row["edu"]==="國中"?"selected":"";?>>國中</option>
                            <option value="高中職" <?php echo $row["edu"]==="高中職"?"selected":"";?>>高中職</option>
                            <option value="大專院校" <?php echo $row["edu"]==="大專院校"?"selected":"";?>>大專院校</option>
                            <option value="研究所以上" <?php echo $row["edu"]==="研究所以上"?"selected":"";?>>研究所以上</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>專長</label>
                        <div class="form-check">
                            <input type="checkbox" name="skills[]" id="design" value="平面設計" class="form-check-input">
                            <label for="design" class="form-check-label">平面設計</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="skills[]" id="web" value="網頁設計" class="form-check-input">
                            <label for="web" class="form-check-label">網頁設計</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="skills[]" id="premiere" value="影視剪輯" class="form-check-input">
                            <label for="premiere" class="form-check-label">影視剪輯</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="remark">備註</label>
                        <textarea name="remark" id="remark" rows="6" class="form-control"><?php echo $row["remark"];?></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="儲存">
                </form>
            </div>
        </div>
    </div>
</body>
</html>