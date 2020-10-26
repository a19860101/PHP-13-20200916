<?php
    #物件導向程式設計 object-oriented programing

    #建立類別
    class Dog {
        #屬性
        public $color="Black";
        public $size="Small";
        public $type;
        #方法
        function woof(){
            echo "叫";
        }
        function watchDoor(){
            echo "看門";
        }
    }

    #建立實例(實體)

    $lucky = new Dog;
    // var_dump($lucky);

    echo $lucky->color;
    echo "<br>";
    echo $lucky->size;
    echo "<br>";
    echo $lucky->type = "及哇哇";
    echo "<br>";
    
    
    $qq = new Dog;
    
    echo $qq->color = "Brown";
    echo "<br>";
    echo $qq->size = "Medium";
    echo "<br>";
    echo $qq->type = "秋田";