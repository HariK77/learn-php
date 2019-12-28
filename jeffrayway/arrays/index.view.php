<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP -  Arrays</title>
    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<ul>
    <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
</ul>
<br>
<ul>
    <?php foreach ($names as  $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>
</ul>
<h2>Associative Arrays</h2>

<ul>
    <?php foreach ($person as $key => $feature) : ?>
            <li> <strong><?= ucfirst($key).' : '; ?></strong> <?= $feature; ?></li>
        <?php endforeach; ?>
</ul>

<h2>Associative Arrays (Task)</h2>

<ul>
    <?php foreach ($task as $key => $taskFeature) : ?>
            <li> <strong><?= ucfirst($key).' : '; ?></strong> <?= $taskFeature; ?></li>
        <?php endforeach; ?>
</ul>

<h2>Associative Arrays (Task)</h2>

<ul>
    <li><strong>Title : </strong><?= $task['title']; ?></li>
    <li><strong>Due Date : </strong><?= $task['due']; ?></li>
    <li><strong>Assigned To : </strong><?= $task['assigned_to']; ?></li>
    <!-- <li><strong>Status : </strong><?php // $task['completed'] ? '&#9989' : 'Incompleted' ; ?></li> -->
    <li>
    <strong>Status : </strong>
        <?php if($task['completed']) : ?>
            <span class="icon">&#9989</span>
        <?php else : ?>
        <span class="icon">Incompleted</span>
        <?php endif; ?>
    </li>
</ul>

<h1>Checking for netry into club</h1>

<?php $age = 18; ?>
<p>Age = <?= $age; ?></p>

<?= checkEligibity($age) ? 'You are eligible' : 'You are not eligible' ?>
    
</body>
</html>