<?php require 'partials/header.php'; ?>
    <h1>Users</h1>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><strong>ID: </strong><?= $user->id; ?> Name: <?= $user->name; ?></li>
        <?php endforeach; ?>
    </ul>
<?php require 'partials/footer.php'; ?>