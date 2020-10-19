<?php
    function showAll(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM gallery";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($data = $stmt->fetch()){
                $rows[] = $data;
            }
            return $rows;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    function store($name,$path){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO gallery(name,path)VALUES(?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$path]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function uploadImg($file){
        extract($file);
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
                imgResize($type,$target,$path);
                return $path;
            }else{
                echo "上傳失敗";
            }
        }else{
            echo "上傳錯誤";
        }
    }
    function imgResize($type,$target,$path){
        switch($type){
            case "image/jpeg":
                $canvas = imagecreatefromjpeg($target);
            break;
            case "image/png":
                $canvas = imagecreatefrompng($target);
            break;
            case "image/gif":
                $canvas = imagecreatefromgif($target);
            break;
            $canvas_w = imagesx($canvas);
            $canvas_h = imagesy($canvas);

            $new_w = 600;
            $new_h = $canvas_h / $canvas_w * $new_w;

            $new_canvas = imagecreatetruecolor($new_w,$new_h);
            imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);
            imagejpeg($new_canvas,"thumbs/".$path);
            imagepng($new_canvas,"thumbs/".$path);
            imagegif($new_canvas,"thumbs/".$path);
        }
    }