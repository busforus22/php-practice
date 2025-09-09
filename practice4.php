<?php

//問題　for と continue を使用して1から50までの数字の奇数を縦に表示してください。

for($i = 1; $i <= 50; $i++){
    if($i % 2 == 1){
        echo "$i<br>";
    }
}

/*解答
<?php
for($a=1; $a<=50; $a++){
	if($a%2 == 0)      $aを2で割った余りが0と等しい
	continue;          if条件がTRUEならforに返る
	print($a."<br>");
} 
?>
*/

/*感想　どう考えてもこの出力を求めるのにcontinueは不要。
やるなら、

for($i = 1; $i <= 50; $i++){
    if($i % 2 == 0){
        continue;
    }
    echo "$i<br>";
}


*/

