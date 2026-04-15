<?php
$num = 121;   // given number
$rev = 0;
$temp = $num;

while($num > 0){
    $r = $num % 10;
    $rev = $rev * 10 + $r;
    $num = (int)($num / 10);
}

if($temp == $rev){
    echo "Palindrome Number";
}else{
    echo "Not Palindrome";
}
?>
