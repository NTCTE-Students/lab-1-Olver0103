<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Здрасте</title>
</head>
<body>
    <h1>здесь вирусы</h1>
    <p>Этот файл очень опасен </p>
    <form method="post">
        <input type="text" placeholder="Введите имя ..." name="name" />
        <input type="submit" value="приветствую"/>
    </from>
    <?php
    if (isset($_POST['name'])) {
        $greetings = htmlspecialchars(string: $_POST['name']);
        print("<p>Привет, {$greetings}</p>");
    }
    ?>
    </body>
</html>