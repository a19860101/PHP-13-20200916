<?php
    #物件導向程式設計 object-oriented programing

    #public 可在類別內與實體取用
    #private 不可在實體取用，也無法在繼承的類別內取用，只能在自己的類別內取用
    #protected 不可在實體取用，可在繼承的類別取用

    #建立類別
    class Dog {
        #屬性
        public $color="Black";
        public $size="Small";
        private $gender = "male";
        protected $type = "mix";
        #方法
        function woof(){
            return "叫";
        }
        function watchDoor(){
            echo "看門";
        }
        function run(){
            echo $this->gender; 
        }
    }

    #建立實例(實體)

    $lucky = new Dog;
    // var_dump($lucky);

    // echo $lucky->color;
    // echo "<br>";
    // echo $lucky->size;
    // echo "<br>";
    // echo $lucky->type = "及哇哇";
    // echo "<br>";
    // echo $lucky->woof();
    // echo "<br>";
    // echo $lucky->gender;
    // $lucky->run();
    $qq = new Dog;
    
    // echo $qq->color = "Brown";
    // echo "<br>";
    // echo $qq->size = "Medium";
    // echo "<br>";
    // echo $qq->type = "秋田";
    // echo "<br>";
    // echo $qq->woof();
    // echo "<br>";

    class Cat extends Dog{
        function catchMouse(){
            echo  $this->gender;
        }
    }

    $bb = new Cat;

    // echo $bb->color;
    // echo $bb->woof();
    // echo $bb->gender;
    // $bb->run();
    $bb->catchMouse();