<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}


function checkEligibity($age)
{
    if ($age < 21) {
        return false;
    } 
    return true;
}