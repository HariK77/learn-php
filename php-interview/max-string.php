<?php

$sentence = "My name is Hari Krishna I am a Software biiiigwoooord Engineer with PHP as main skill but learning python";

$wordsarray = explode(' ', $sentence);

$length = 0;

$word = '';

foreach ($wordsarray as $word) {
    if (strlen($word) > $length) {
        $length = strlen($word);
        $longword = $word;
    }
}

echo $longword;

?>