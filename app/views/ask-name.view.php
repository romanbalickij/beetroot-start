<?php require 'app/views/partials/header.php';?>
<h3>ask your name</h3>

<form action="save-name" method="POST">
    Name:    <br><input type="text" name="name"><br>
    Username:<br><input type="text" name="username"><br>
    <button type="submit">надiслати</button>
</form>
<?php require 'app/views/partials/footer.php';?>
