<?php

require 'functions.php';

class Task {

    public $description;
    public $completed;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$task = new Task("Go To Store");

dd($task);
$task->complete();

dd($task->isComplete());

$tasks = [
    new Task('Go To Store'),
    new Task('Complete PHP'),
    new Task('Stick with PHP')
];

$tasks[0]->complete();


require 'index.view.php';

