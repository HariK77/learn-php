<?php require('partials/header.php'); ?>

    <h1>Hi</h1>
    <hr> 
    <ul>
        <?php foreach($users as $user) : ?>
            <li><?= $user->name ?></li>
        <?php endforeach; ?>
    </ul>

    <form action="/names" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php require('partials/footer.php'); ?>