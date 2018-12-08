<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<header>
    <?php require 'views/partials/nav.views.php';?>
    <h3>ask your name</h3>
    <form action="users" method="POST">
        Name:    <br><input type="text" name="name"><br>
        Username:<br><input type="text" name="username"><br>
        <button type="submit">надiслати</button>
    </form>
    <ul>
        <?php foreach ($users as $user): ?>
            <li> <?=$user->name; ?></li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>


