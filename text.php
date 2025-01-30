<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> это что такое?</h1>
    <?php  
    if (isset($_GET['massage'])) {
        print('<p>Мне пришло сообщение:</p>');
        print("<p><i>{$_GET['massage']}</i></p>");
    } else {
        print('<p> Ничего не пришло...</p>');
    }
    ?>
</body>
</html>