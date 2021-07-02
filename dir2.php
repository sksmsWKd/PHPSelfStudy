<?php

$dir ='./';
$file= scandir($dir);
$file2= scandir($dir,1);
# 두번째 인자가 1일경우 결과값이 반대로 나옴.

print_r($file);
print_r($file2);
?>