<?php
//迴圈
//for
for($i=0;$i<10;$i++){
    // $i += 2;
    echo $i;
}
/*
for(初始值;條件;迴圈執行完的動作){
    動作
}

*/
echo "<br>";
echo "<div>while</div>";
//while
$x = 10;
while($x<10){
    echo $x;
    $x++;
}
echo "<br>";
echo "<div>do...while</div>";
//do...while
$a = 10;
do {
    echo $a;
    $a++;
}
while($a < 10);

//foreach