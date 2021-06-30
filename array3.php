<?php
        $li=['a','e','i','o','u'];
        array_push($li,'f');


        for($i=0 ; $i<count($li);$i++){
        echo $li[$i];
        }
        echo  "<br>\n"; 

        array_unshift($li,'z');
        for($i=0 ; $i<count($li);$i++){
        echo $li[$i];
        }
        echo  "<br>\n"; 

        $new1 = array_shift($li);
        echo $new1;
        echo  "<br>\n"; 
      
        for($i=0 ; $i<count($li);$i++){
        echo $li[$i];
        }
        echo  "<br>\n"; 

        array_pop($li);
        
        for($i=0 ; $i<count($li);$i++){
        echo $li[$i];
        }
        echo  "<br>\n"; 

        #    sort($li);  사전순 정렬
        rsort($li);  #사전역순 정렬

        for($i=0 ; $i<count($li);$i++){
         echo $li[$i];
        }
        echo "사전 역순";
         echo  "<br>\n"; 
?>
