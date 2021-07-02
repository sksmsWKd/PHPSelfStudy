<?php
$file='fileput.txt';


if (is_readable($file)) {
        echo 'The file is readable';
    } else {
        echo 'The file is not readable';
    }

    if (is_writable($file)) {
        echo 'The file is writable';
    } else {
        echo 'The file is not writable';
    }

    if (file_exists($file)) {
        echo "The file $file exists";
        echo 'The file $file exists';
    } else {
        echo "The file $file is not exists";
    }
?>