<?php
    include("function.php");
    $row = show($_GET["id"]);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>學員 <?php echo $row["name"];?> 資料</h2>
            <ul class="list-group my-3">
                <li class="list-group-item">Mail:<?php echo $row["mail"];?></li>
                <li class="list-group-item">性別:<?php echo $row["gender"];?></li>
                <li class="list-group-item">電話:<?php echo $row["phone"];?></li>
                <li class="list-group-item">學歷:<?php echo $row["edu"];?></li>
                <li class="list-group-item">專長<?php echo $row["skills"];?></li>
                <li class="list-group-item">備註:
                    <?php echo $row["remark"] === ""? "無":$row["remark"];?>
                </li>
            </ul>
            <a href="index.php" class="btn btn-primary">學員列表</a>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
