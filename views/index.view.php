<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<header>
    <?php require 'views/partials/nav.views.php';?>
    <ul>
        <?php foreach ($users as $user): ?>
            <li> <?=$user->name; ?></li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>


