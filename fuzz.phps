<?php 
for($i = 1; $i<= 100; $i++){

$str=""; //$strという変数を初期化 
if($i %15==0){
$str="FizzBuzz";
}
else if($i %3 ==0){ //３で割って余り0ならば 
$str="Fizz"; 
} 
else if($i%5 ==0){//５で割って余り0ならば 
$str="Buzz"; 
} 
if($str == ""){//$strが空ならば 
$str = $i;//$iという変数表示 
} 
echo $str."\n";
echo"<BR>";
} 

?> 