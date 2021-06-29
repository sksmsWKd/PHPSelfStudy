<?php
function abc(){
        return['aristotle','bismarck','churchill'];
}

$temp = abc();

for ($i = 0;$i<count($temp);$i++){
        echo ucfirst($temp[$i]).'<br/>';
}
?>