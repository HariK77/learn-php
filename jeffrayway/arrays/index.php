<?php 

require 'functions.php';

$names = [
    'Hari',
    'Krishna',
    'Pratibha',
    'HariK'
];

$names[] = 'Added';

$key = array_search("HariK", $names);

if ($key !== false) {
 unset($names[$key]);
}


$person = [
    'name' => 'Hari Krishna',
    'age' => 24,
    'color' => 'black',
    'career' => 'Web Developer'
];

$person['newly_added'] = 'Adding Assoc Array';

unset($person['age']);

$task = [
    'title' => 'Go to Nowhere',
    'due' => '27-07-2019',
    'assigned_to' => 'Me',
    'completed' => true
];


dd($task);


// deleting specific element from array

// **************************************

// $a = array(
//     'salam',
//     '10',
//     1
// );

// $key = array_search(10, $a);

// if ($key !== false) {
//  unset($a[$key]);
// }

// // print_r($a);


// **************************************

/**

 Output:

     Array
     (
         [0] => salam
         [2] => 1
     )



 */


require 'index.view.php';