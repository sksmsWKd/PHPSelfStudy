<?php
$grades = array('hello'=>1,'nice'=>2,'to'=>3);
var_dump($grades);

echo "<br>\n";

$hi =[];
$hi['안녕배열'] = 'ㅋㅋ';
$hi['반갑다'] = 5;
$hi['연관배열'] = 3;

var_dump($hi);
echo "<br>\n";

# array( 'a' => 10 ) 하거나
# $array1=['키'] = 값 하거나.

foreach($hi as $key => $value){
        echo "key : {$key} value: {$value}<br/>";
}echo "<br>\n";

foreach($hi as $key){
        echo "key {$key}<br/>" ;
}echo "<br>\n";

foreach($hi as $a => $b ){
        echo "key : {$a} value : {$b} <br/> " ;
}echo "<br>\n";



/*
$hi 자리에는 배열 또는 횟수만큼
foreach($배열 as $키변수 => $값변수){
        키변수 값변수는 마음대로 지정 가능.
}
*/


?>

