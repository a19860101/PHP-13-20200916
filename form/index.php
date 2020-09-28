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
        <div class="row">
            <div class="col-6">
                <form action="response.php" method="post">
                    <div class="form-group">
                        <label for="">姓名</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">電話</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" name="mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>性別</label>
                        <label for="male">
                            <input type="radio" name="gender" id="male" value="男">男
                        </label>
                        <label for="female">
                            <input type="radio" name="gender" id="female" value="女">女
                        </label>
                        <label for="unknown">
                            <input type="radio" name="gender" id="unknown" value="不透漏" checked>不透漏
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="edu">學歷</label>
                        <select name="edu" id="edu" class="form-control">
                            <option value="國小">國小</option>
                            <option value="國中">國中</option>
                            <option value="高中職">高中職</option>
                            <option value="大專院校">大專院校</option>
                            <option value="研究所以上">研究所以上</option>
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
                        <textarea name="remark" id="remark" rows="6" class="form-control"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="新增">
                </form>
            </div>
        </div>
    </div>
</body>
</html>