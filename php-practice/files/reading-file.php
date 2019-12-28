<?php


$file = "test.txt";

if ($handle = fopen($file, 'r')) {

    echo $content = fread($handle, filesize($file));


} else {

    echo "The application was not able to read the file";

}

