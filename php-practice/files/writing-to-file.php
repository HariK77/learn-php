<?php


$file = "test.txt";

if ($handle = fopen($file, 'w')) {

    fwrite($handle, 'This is my first wrting to file using PHP and asdasdadasasd');

    fclose($handle);

} else {

    echo "The application was not able to write to file";

}

