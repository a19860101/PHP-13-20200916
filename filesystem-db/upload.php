<?php
    
    extract($_FILES["img"]);
    switch($type){
        case "image/jpeg":
            $path = md5(time()).".jpg";
        break;
        case "image/png":
            $path = md5(time()).".png";
        break;
        case "image/gif":
            $path = md5(time()).".gif";
        break;
        default: 
            echo "請上傳正確的圖片";
            return;
    }
    $target = "images/".$path;
    if($error === 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            try {
                require_once("pdo.php");
                $sql = "INSERT INTO gallery(name,path)VALUES(?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$name,$path]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            header("refresh: 1;url=index.php");

        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤";
    }