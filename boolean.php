<?php
/*
*불린 판단에서 값이없는 배열, 빈문자열 NULL , 문자열 0도 0으로 간주. ->false
*/
if (1 and 1) {
    echo 1;
}
if (1 and 0) {
    echo 2;
}
if (0 and 1) {
    echo 3;
}
if (0 and 0) {
    echo 4;
}
?>

