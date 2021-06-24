<?php
$i = 0;

while($i < 10 ){
        echo $i;
        $i ++;
}

echo "<br>\n";
for($a=1 ; $a<10; $a++){
        echo $a;
}

echo "<br>\n";
for($b=0; $b<10; $b+=2){
        echo $b;
}
echo "<br>\n";

$a= 0;
while($a < 10){
        echo "Hi nice to meet".$a." You";
        echo "<br>\n";
        echo "Me too{$a} Hello";
        echo "<br>\n";
        echo "Me too".($a*2)."Hello";
        echo "<br>\n";
        $a++;
}




?>