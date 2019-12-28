<?php

class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false),
];

// Array Filter

// $unpublishedPosts = array_filter($posts, function($post) {
//     return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function($post) {
//     return $post->published;
// });

// echo "Published Posts<br>";

// var_dump($publishedPosts);
// echo '<br>';

// echo "UnPublished Posts<br>";

// var_dump($unpublishedPosts);

// Array map

// Converting objects into arrays

$modified = array_map(function($post) {
    return (array) $post;
}, $posts);

var_dump($modified);

// Getting only titles
echo '<br>';
echo '<br>';

$modifiedTwo = array_map(function($post) {
    return $post->title;
}, $posts);

var_dump($modifiedTwo);

echo '<br>';
echo '<br>';

// Using Array Column

$titles = array_column($posts, 'title');

var_dump($titles);