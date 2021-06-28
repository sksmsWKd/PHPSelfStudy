<?php

function numbering(){
        $i=0;
        while($i < 10){
                echo $i;
                $i+=1;
        }
}
numbering();
echo "<br>\n";
echo "0~9 끝 ㅡㅡ";
for($a =0; $a<5 ; $a++){
        numbering();
        echo "<br>\n";
}
?>