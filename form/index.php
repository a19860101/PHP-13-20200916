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
                            <input type="radio" name="gender" id="unknown" value="不透漏">不透漏
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
                    <input type="submit" class="btn btn-primary" value="新增">
                </form>
            </div>
        </div>
    </div>
</body>
</html>