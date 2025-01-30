<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> мой кодик</h1>
    <a href="/text.php?message=Привет, Мир!"> Перейти куда-то </a>
    <ul>
    <?php  
        for ($i = 0; $i <= 10; $i++) {
            print("<li> Элемент № {$i}</li>");
        }
    ?>
    </ul>
</body>
</html>