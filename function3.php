<?php

function hi($name="이름이없네요!"){
return "hello".$name;
}

echo hi();
echo "<br>\n";
echo hi("이름");
echo "<br>\n";
print hi("print");
echo "<br>\n";



function add($a,$b){
     return $a+$b;
}

/*
echo $a 또는 echo $b하면 에러남
함수 인자는 지역변수라서.
*/

echo add(10,20);
echo "<br>\n";
echo add(30,40);
echo "<br>\n";
?>