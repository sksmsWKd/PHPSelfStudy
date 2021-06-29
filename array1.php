<?php
$array1=['a','b','c'];

echo $array1[0].'<br/>';
echo $array1[2].'<br/>';

function english(){
        return ['d','e','f'];
}

#하나의 함수의 호출 결과가 여러개의 
#결과를 가질 수 있다.

$temp = english();
echo $temp[0].'<br />';

# or

echo english()[0].'<br />';
?>