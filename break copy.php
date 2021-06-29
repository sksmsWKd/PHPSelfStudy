<?php
for( $a=0; $a<10; $a++){
        if($a ===5){
                break;
        }
        echo ($a);
        echo "Hi nice to meet".$a." You";
        echo "<br>\n"; 

}
echo "<br>\n"; 
for( $b=0; $b<10; $b++){
        if($b === 5){
                continue;
        }
        echo "Hi nice to meet".$b." You ";
        echo "<br>\n"; 

}
for($i = 0 ; $i<5 ; $i++){
        for($j = 0 ; $j<5 ; $j++){
                echo $i.$j;
                echo "{$i}{$j}";
                echo "<br>\n"; 
        }
}
?>

