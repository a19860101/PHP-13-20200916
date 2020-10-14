<?php
    include("function.php");
    $rows = showAll();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>
                    </th>
                </tr>
            <?php foreach($rows as $row){?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td>
                        <a href="show.php?id=<?php echo $row["id"];?>" class="btn btn-primary">檢視</a>
                        <a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-success">編輯</a>
                        <form action="delete.php" method="post" class="d-inline-block">
                            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                            <input type="submit" value="刪除" class="btn btn-danger" onclick="return confirm('確認刪除？')">
                        </form>
                    </td>
                </tr>
            <?php }?>
            </table>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
