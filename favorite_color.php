<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Результат выбора цвета</title>
</head>
<body>
    <?php
    $color = (string) $_POST['color'];

    switch ($color) {
        case 'red':
            print('Вы выбрали красный цвет. Красный цвет победы!');
            break;
        case 'blue':
            print('Вы выбрали синий цвет. Синий цвет символизирует море!');
            break;
        case 'green':
            print('Вы выбрали зеленый цвет. Зеленый цвет символизирует природу!');
            break;
        case 'yellow':
            print('Вы выбрали желтый цвет. Желтый цвет символизирует песочек!');
            break;
        case 'purple':
            print('Вы выбрали фиолетовый цвет. Фиолетовый цвет символизирует кинетическую энергию!');
            break;
        default:
            print('Вы не выбрали цвет. Настоятельно требую выбрать :(.');
            break;
    }
    ?>
</body>
</html>